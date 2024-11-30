<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function adminIndex()
    {
        return view('admin.menu.index');
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function edit()
    {
        return view('admin.menu.edit');
    }
}
