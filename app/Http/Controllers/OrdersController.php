<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function orders()
    {
        if (Auth::check()) {
            $userEmail = Auth::user()->email;
            $select = DB::select("select * from orders WHERE clientEmail='$userEmail' ORDER BY orderDate DESC ");
            return view('orders')->with('post', $select);
        } else {
            return redirect('login');
        }
    }
}
