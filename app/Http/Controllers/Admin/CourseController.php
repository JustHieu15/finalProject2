<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Semester;
use App\Models\SchoolYear;
use App\Models\Subject;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $semesters = Semester::all();
        $schools = SchoolYear::all();

        foreach ($schools as $school) {
            $startYear = date('Y', strtotime($school->start_date));
            $endYear = date('Y', strtotime($school->end_date));

            $school->start = $startYear;
            $school->end = $endYear;
        }

        $courses = Course::join('subject', 'course.subject_id', '=', 'subject.id')
            ->select('course.*', 'subject.name as subject_name')
            ->get();

        return view('admin.course.index', compact('semesters', 'courses', 'schools'));
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

        $insertCourse = Course::create([
            'name' => $data['name'],
            'subject_id' => $data['subject_id'],
        ]);

        if ($insertCourse) {
            $insertCourse->save();

            return redirect()->route('admin.course.index')->with('success', 'Course created successfully');
        }

        return redirect()->route('admin.course.index')->with('error', 'Course failed to create');
    }

    public function edit(Request $request, $slug)
    {
        $request->session()->put('course_slug', $slug);

        $course = Course::join('subject', 'course.subject_id', '=', 'subject.id')
            ->select('course.*', 'subject.name as subject_name')
            ->where('course.slug', $slug)
            ->first();

        return view('admin.course.edit', compact('course'));
    }

    public function update(Request $request)
    {
        $slug = $request->session()->get('course_slug');
        $data = $request->all();

        $updateCourse = Course::where('slug', $slug)->first();

        if ($updateCourse) {
            $updateCourse->update([
                'name' => $data['name'],
            ]);

            $updateCourse->save();

            return redirect()->route('admin.course.index')->with('success', 'Course updated successfully');
        }

        return redirect()->route('admin.course.index')->with('error', 'Course failed to update');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        $deleteCourse = Course::where('id', $id)->delete();

        if (!$deleteCourse) {
            return redirect()->route('admin.course')->with('error', 'Course not found');
        }

        return redirect()->route('admin.course')->with('success', 'Course deleted successfully');
    }
}
