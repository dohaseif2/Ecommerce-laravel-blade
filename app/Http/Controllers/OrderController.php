<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(StoreOrderRequest $request)
    {
        $order = new Order();
        $order->total_price = $request->input('total_price');
        $order->address = $request->input('address');
        $order->phone = $request->input('phone');
        $order->user_id = Auth::id();
        $order->status=false;
        $order->save();

        $cart = session('cart');
        foreach ($cart as $productId => $item) {
            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->product_id = $item['id'];
            $orderProduct->quantity = $item['quantity'];
            $orderProduct->price = $item['price'];
            $orderProduct->save();
        }

        Session::forget('cart');

        return redirect()->route('homePage');
    }
}
