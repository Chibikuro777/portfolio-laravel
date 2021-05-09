<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function input()
    {
        return view('contact.input');
    }

    public function confirm()
    {
        return view('contact.confirm');
    }
}
