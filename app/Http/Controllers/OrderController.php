<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $cart = session()->get('cart', []);

        $totalPrice = array_reduce($cart, function($total, $item) {
            return $total + $item['price'];
        }, 0);
        return view('order.create', compact('totalPrice'));
    }

    public function create(Request $request){
        dd($request);
    }
}
