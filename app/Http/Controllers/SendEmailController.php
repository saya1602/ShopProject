<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('contacts');
    }

    function send(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        );

        Mail::to($request->email)->send(new SendMail($data));

        return back()->with('success', 'Thanks for contacting us!');
    }
}