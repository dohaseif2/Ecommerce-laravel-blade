<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        $order=new Order();
        $order->total_price = $request->input('total_price');
        $order->address = $request->input('address');
        $order->phone = $request->input('phone');
        $order->user_id = Auth::id();
        $order->save();
        Session::forget('cart');

        return redirect()->route('homePage');
    }


}
