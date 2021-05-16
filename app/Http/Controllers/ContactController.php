<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function input()
    {
        return view('contact.input');
    }

    public function confirm(ContactRequest $request)
    {
        if ($request->input('button') === 'back') {
            return redirect('contact.input');
        } else {
            return view('contact.confirm');
        }
    }

    public function complete()
    {
        return view('contact.complete');
    }
}
