<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function books()
    {
      if (Auth::check()) {
        $selectbooks = DB::select('select * from books');
        return view('books')->with('post',$selectbooks);
      } else {
        return redirect('login');
      }
    }
}
