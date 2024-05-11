<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        return view('admin.class.index');
    }

    public function create()
    {
        return view('admin.class.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.class.index');
    }

    public function manage($id)
    {
        return view('admin.class.manage');
    }
}
