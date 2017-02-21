<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'customer_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'feedback' => 'required',
            'total_price' => 'required',
        ]);

        return view('orders.index');
    }
}
