<?php

namespace App\Http\Controllers;

use App\Models\RentCar;
use Carbon\Carbon;
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
        $data = $request->all(['id', 'name', 'category', 'price', 'seat', 'image']);

        $rentedCars = RentCar::where('overdue', '>=' , Carbon::now())->get();

        $cars = $request->session()->get('cars', []);

        # check overdue
        $isAvaliable = true;
        foreach ($rentedCars as $rentCar) {
            if ($data['id'] == $rentCar['car_id']) {
                $isAvaliable = false;
            }
        }
        if(!$isAvaliable){
            return redirect()->back()->with('error', 'This vehicle is not avaliable to book right now!');
        }
        # check if item already exists in cart
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

    public function addtocarts(Request $request) 
    {
        $ids = $request->input('ids');
        $perdays = $request->input('perdays');
        $newCart = [];
        for ($i = 0; $i < count($ids); $i++) {
            array_push($newCart , [
                'id' => $ids[$i],
                'perday' => $perdays[$i]
            ]);
        }

        $cars = collect($request->session()->get('cars', []));

        $cars->transform(function ($car) use ($newCart) {
            foreach ($newCart as $newCar) {
                if ($car['id'] === $newCar['id']) {
                    $car['perday'] = $newCar['perday'];
                    break;
                }
            }
            return $car;
        });

        $request->session()->put('cars', $cars);

        return redirect('/checkout');
    }

    public function delete()
    {
        session()->flush();
 
        // session()->keep(['username', 'email']);

        return redirect('/');
    }
}
