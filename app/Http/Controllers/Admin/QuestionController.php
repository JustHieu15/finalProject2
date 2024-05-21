<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;

class QuestionController extends Controller
{
    public function index()
    {
        $tests = Test::join('course', 'test.course_id', '=', 'course.id')
            ->select('test.*', 'course.name as course_name')
            ->get();

        foreach ($tests as $test) {
            // convert type time_limit from string to integer
            $test->time_limit = strtotime($test->time_limit) - strtotime('00:00:00');

            // convert time_limit from seconds to minutes
            $test->time_limit = $test->time_limit / 60;
        }

        return view('admin.question.index', compact('tests'));
    }

    public function store(Request $request)
    {
        $data = $request->all();


        foreach ($data as $key => $value) {
            if (strpos($key, 'choice') !== false) {
                $data['choice'][] = $value;
                unset($data[$key]);
            }

            if (strpos($key, 'correct_answer') !== false) {
                $data['correct_answer'][] = $value;
                unset($data[$key]);
            }
        }

        foreach ($data['choice'] as $keys => $choices) {
            foreach ($choices as $key => $choice) {
                $data['answer'][$keys][$key] = [
                    'content' => $choice,
                    'is_correct' => $data['correct_answer'][$keys] == $key ? 1 : 0
                ];
            }
        }

        foreach ($data['question'] as $key => $question) {
            $insertQuestion = Question::create([
                'title' => $question,
                'test_id' => $data['test_id']
            ]);

            foreach ($data['answer'][$key] as $answer) {
                $insertAnswer = Answer::create([
                    'content' => $answer['content'],
                    'is_correct' => $answer['is_correct'],
                    'question_id' => $insertQuestion->id
                ]);
            }
        }

        if ($insertQuestion && $insertAnswer) {
            return redirect()->route('admin.question.index');
        }

        return redirect()->back();
    }
}
