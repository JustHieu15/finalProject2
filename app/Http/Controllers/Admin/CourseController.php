<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Semester;
use App\Models\Subject;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $semesters = Semester::all();
        $courses = Course::join('subject', 'course.subject_id', '=', 'subject.id')
            ->select('course.*', 'subject.name as subject_name')
            ->get();

        return view('admin.course.index', compact('semesters', 'courses'));
    }

    public function create()
    {
        $subjects = Subject::all();
        $course = Course::orderBy('id', 'desc')->first();

        if (empty($course)) {
            $course = new Course();
            $course->id = 1;
        } else {
            $course->id += 1;
        }

        return view('admin.course.create', compact('subjects', 'course'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $insertCourse = Course::insert([
            'name' => $data['name'],
            'subject_id' => $data['subject_id'],
        ]);

        if ($insertCourse) {
            return redirect()->route('admin.course.index')->with('success', 'Course created successfully');
        }

        return redirect()->route('admin.course.index')->with('error', 'Course failed to create');
    }

    public function edit(Request $request, string $id)
    {
        $request->session()->put('course_id', $id);

        $course = Course::join('subject', 'course.subject_id', '=', 'subject.id')
            ->select('course.*', 'subject.name as subject_name')
            ->where('course.id', $id)
            ->first();

        return view('admin.course.edit', compact('course'));
    }

    public function update(Request $request)
    {
        $id = $request->session()->get('course_id');
        $data = $request->all();


        $updateCourse = Course::findOrfail($id)->update([
            'name' => $data['name'],
        ]);

        if ($updateCourse) {
            return redirect()->route('admin.course.index')->with('success', 'Course updated successfully');
        }

        return redirect()->route('admin.course.index')->with('error', 'Course failed to update');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        if (!$id) {
            return redirect()->route('admin.course')->with('error', 'Course not found');
        }

        return redirect()->route('admin.course')->with('success', 'Course deleted successfully');
    }
}
