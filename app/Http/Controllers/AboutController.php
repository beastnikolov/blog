<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function about()
    {
      if (Auth::check()) {
        return view('about');
      } else {
        return redirect('login');
      }
    }
}
