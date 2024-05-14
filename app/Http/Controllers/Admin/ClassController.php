<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Semester;
use App\Models\Classroom;
use App\Models\Course;

class ClassController extends Controller
{
    public function index()
    {
        $semesters = Semester::all();
        $classes = Classroom::all();

        return view('admin.class.index', compact('semesters', 'classes'));
    }

    public function create()
    {
        $semesters = Semester::all();
        $class = Classroom::orderBy('id', 'desc')->first();

        if (empty($class)) {
            $class = new Classroom();
            $class->id = 1;
        } else {
            $class->id += 1;
        }

        return view('admin.class.create', compact('semesters', 'class'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $insertClass = Classroom::insert([
            'name' => $data['name'],
            'number_student' => $data['number_of_students'],
            'semester_id' => $data['semester_id'],
        ]);

        if ($insertClass) {
            return redirect()->route('admin.class.index')->with('success', 'Class created successfully');
        }

        return redirect()->route('admin.class.index')->with('error', 'Class created failed');
    }

    public function manage($id)
    {
        $class = Classroom::join('semester', 'class.semester_id', '=', 'semester.id')
            ->select('class.*', 'semester.name as semester_name', 'semester.year as semester_year')
            ->where('class.id', $id)
            ->first();
        $courses = Course::join('subject', 'course.subject_id', '=', 'subject.id')
            ->select('course.*', 'subject.name as subject_name')
            ->get();

        return view('admin.class.manage', compact('class', 'courses'));
    }

    public function update(Request $request)
    {
        $id = session()->has('class_id') ? session('class_id') : null;

        if (!$id) {
            return redirect()->route('admin.class')->with('error', 'Class not found');
        }

        $data = $request->all();

        return redirect()->route('admin.class')->with('success', 'Class updated successfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        if (!$id) {
            return redirect()->route('admin.class')->with('error', 'Class not found');
        }

        return redirect()->route('admin.class')->with('success', 'Class deleted successfully');
    }
}
