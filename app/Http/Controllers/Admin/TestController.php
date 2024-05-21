<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Classroom;
use App\Models\SchoolYear;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $semesters = Semester::all();
        $schools = SchoolYear::all();
        $tests = Test::join('course', 'test.course_id', '=', 'course.id')
            ->select('test.*', 'course.name as course_name')
            ->get();

        foreach ($tests as $test) {
            // convert type time_limit from string to integer
            $test->time_limit = strtotime($test->time_limit) - strtotime('00:00:00');

            // convert time_limit from seconds to minutes
            $test->time_limit = $test->time_limit / 60;
        }

        foreach ($schools as $school) {
            $startYear = date('Y', strtotime($school->start_date));
            $endYear = date('Y', strtotime($school->end_date));

            $school->start = $startYear;
            $school->end = $endYear;
        }

        return view('admin.test.index', compact('semesters', 'schools', 'tests'));
    }

    public function create()
    {
        $courses = Course::all();
        $test = Test::select('id')->orderBy('id', 'desc')->first();

        if ($test) {
            $testId = $test->id + 1;
        } else {
            $testId = 1;
        }

        return view('admin.test.create', compact('courses', 'testId'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $timeLimit = $data['time_limit'];
        $timeLimit = gmdate('i:s:00', $timeLimit);

        $insertTest = Test::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'time_limit' => $timeLimit,
            'course_id' => $data['course_id']
        ]);

        if ($insertTest) {
            $insertTest->save();

            return redirect()->route('admin.test.index')->with('success', 'Test created successfully');
        } else {
            return redirect()->route('admin.test.index')->with('error', 'Test failed to create');
        }
    }

    public function show($slug)
    {
        $test = Test::where('slug', $slug)->first();
        $course = Course::where('id', $test->course_id)->first();

        $test->time_limit = strtotime($test->time_limit) - strtotime('00:00:00');
        $test->time_limit = $test->time_limit / 60;

        return view('admin.question.create', compact('test', 'course'));
    }
}
