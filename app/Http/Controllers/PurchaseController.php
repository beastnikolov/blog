<?php

namespace App\Http\Controllers;

use App\Mail\PurchaseMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PurchaseController extends Controller
{
    public function purchaseBook(Request $request) {

        $orderDate = date('Y-m-d h:i:s', time());
        $orderID = time() + rand(0,9999);
        $orderLink = "www.cdnmarionikolov.com/".rand(0,9999999);
        
        Order::create([
            'orderID' => $orderID,
            'orderDate' => $orderDate,
            'productID' => $request->productID,
            'clientEmail' => Auth::user()->email,
        ]);
        $correo = new PurchaseMail([
            'orderID' => $orderID,
            'orderLink' => $orderLink,
            'clientName' => Auth::user()->name,
        ]);
        Mail::to(Auth::user()->email)->send($correo);
        return redirect('home');
    }
}
