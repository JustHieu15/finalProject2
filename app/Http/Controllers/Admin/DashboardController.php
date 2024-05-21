<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SchoolYear;
use App\Models\Classroom;

class DashboardController extends Controller
{
    public function index()
    {
        $schools = SchoolYear::all();

        foreach ($schools as $school) {
            $startYear = date('Y', strtotime($school->start_date));
            $endYear = date('Y', strtotime($school->end_date));

            $school->start = $startYear;
            $school->end = $endYear;
        }

        $classes= Classroom::join('school_year', 'class.school_year_id', '=', 'school_year.id')
            ->orderBy('class.id', 'desc')
            ->limit(5)
            ->get();

        return view('admin.index', compact('schools', 'classes'));
    }
}
