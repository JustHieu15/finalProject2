<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Classroom;

class DashboardController extends Controller
{
    public function index()
    {
        $classes= Classroom::join('semester', 'class.semester_id', '=', 'semester.id')
            ->select('class.*', 'semester.name as semester_name', 'semester.year as semester_year')
            ->get();

        return view('admin.index', compact('classes'));
    }
}
