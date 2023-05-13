<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('checkout');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address1' => 'required',
            'address2' => 'required',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
        ]);
        $newRent = $request->all();
        
    }
}
