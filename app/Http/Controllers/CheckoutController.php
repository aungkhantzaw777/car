<?php

namespace App\Http\Controllers;

use App\Models\RentalHistory;
use App\Models\RentCar;
use Carbon\Carbon;
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
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
        ]);
        $newRent = $request->all();
        $history = RentalHistory::create($newRent);
        $cars = $request->session()->get('cars', []);
        $currentDate = Carbon::now();
        foreach($cars as $car) {
            $overdue = $currentDate->addDay((int)$car['perday'] ?? 1);

            RentCar::create([
                'car_id' => $car['id'],
                'overdue' => $overdue->format('Y-m-d H:i:s'),
                'rental_history_id' => $history->id
            ]);
        }

        session()->flush();

        return redirect('/thankyou');
        
    }
}
