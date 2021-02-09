<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        if (Auth::check()) {
            error_log("right here,right now");
            return view('contact');
        } else {
            return redirect('login');
        }
    }

    public function sendForm(Request $request)
    {
        error_log("In send form right now");
        $correo = new ContactMail($request->contactcontent,Auth::user()->email);
        Mail::to("mariorumenovnikolov@gmail.com")->send($correo);;
        return view('contact')->with('flag',1);
    }
}
