<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
      if (Auth::check()) {
        $select = DB::select('select * from posts ORDER BY postDate DESC');
        return view('home')->with('post',$select);
      } else {
        return redirect('login');
      }
    }
}