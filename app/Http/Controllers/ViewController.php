<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('top');
    }

    public function workExperiences()
    {
        return view('work_experiences');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function hobby()
    {
        return view('hobby');
    }
}
