<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index(Request $request)
    {
        $cars = $request->session()->get('cars', []);
        $totalPrice = 0;

        foreach ($cars as $item) {
            $totalPrice += (int)$item['price'];
        }

        return view('cart', compact('cars', 'totalPrice'));
    }
    public function store(Request $request)
    {
        $id = $request->input('id');
        $data = $request->all(['id', 'name', 'category', 'price', 'seat', 'image']);

        $cars = $request->session()->get('cars', []);

        // check if item already exists in cart
        $itemExists = false;
        foreach ($cars as $key => $cartItem) {
            if ($cartItem['id'] == $data['id']) {
                // if item already exists, update quantity
                $itemExists = true;
                break;
            }
        }
        // if item doesn't exist, add to cart
        if (!$itemExists) {
            $cars[] = $data;
        }
        // store updated shopping cart data in session
        $request->session()->put('cars', $cars);
        return redirect()->back();
    }

    public function delete()
    {
        session()->flush();
 
        // session()->keep(['username', 'email']);

        return redirect('/');
    }
}
