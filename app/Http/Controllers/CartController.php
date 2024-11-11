<?php

namespace App\Http\Controllers;

use App\Models\StoneModel;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function add(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        $product = StoneModel::where('article', '=', $id)->first();


        $cart[$id] = $product;

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Товар добавлен в корзину!');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Товар удален из корзины!');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function index()
    {
        $cart = session()->get('cart', []);

        $totalPrice = array_reduce($cart, function($total, $item) {
            return $total + $item['price'];
        }, 0);

        return view('cart.cart', compact('cart', 'totalPrice'));
    }
}
