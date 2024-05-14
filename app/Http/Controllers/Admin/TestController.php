<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Semester;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $semesters = Semester::all();

        return view('admin.test.index', compact('semesters'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $data = $request->all();

    }

    public function manage($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
}
