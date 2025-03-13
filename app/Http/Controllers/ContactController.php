<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReCaptchaRequest;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function index()
    {
        return view('contactForm');
    }

    public function store(ReCaptchaRequest $request) : RedirectResponse
    {
        $data = $request->validated([]);

        return redirect()->back()->with('success', 'Contact Form Submit Successfully');
    }

}
