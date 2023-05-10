<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function store(Request $request)
    {
        $id = $request->input('id');
        $request->session()->put('cars', ["id" => $id]);
        return response()->json([
            'success' => true
        ]);
    }
}
