<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TestUser;
use Illuminate\Http\Request;

use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;

class TestController extends Controller
{
    public function index()
    {
        return view('client.test.index');
    }

    public function show($slug)
    {
        $test = Test::where('slug', $slug)->first();

        $questions = Question::where('test_id', $test->id)->get();

        foreach ($questions as $question) {
            $ids[] = $question->id;

            $answers = Answer::whereIn('question_id', $ids)->get();

            $question->answers = $answers;
        }

        return view('client.test.show', compact('test', 'questions'));
    }

    public function submit(Request $request)
    {
        $data = $request->all();

        $test = Test::where('id', $data['test_id'])->first();

        $questions = Question::where('test_id', $test->id)->get();

        $correct = 0;

        foreach ($data['answers'] as $key => $value) {
            $answer = Answer::where('content', $value)->where('question_id', $key)->first();

            if ($answer->is_correct == 1) {
                $correct++;
            }
        }

        $result = $correct / count($questions) * 10;

        $testUser= TestUser::create([
            'test_id' => $test->id,
            'user_id' => 1,
            'result' => $result
        ]);

        if ($testUser) {
            return redirect()->route('test.result', $test->slug);
        }

        return redirect()->back();
    }

    public function result($slug)
    {
        $test = Test::where('slug', $slug)->first();

        $testUser = TestUser::where('test_id', $test->id)->where('user_id', 1)->orderBy('result', 'desc')->first();

        return view('client.test.result', compact('testUser'));
    }
}
