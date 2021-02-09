<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function viewBook($id) {
        if (Auth::check()) {
            $select = DB::select("select * from books WHERE id='$id'");
            return view('view')->with('book',$select);
          } else {
            return redirect('login');
          }
    }
}
