<?php

namespace App\Http\Controllers;

use App\Models\RentCar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() 
    {
        $jsonString = file_get_contents(public_path('car.json'));
        $data = json_decode($jsonString, true);

        return response()->json($data);
    }

    public function cars() 
    {
        $data = file_get_contents(public_path('car.json'));
        $cars = json_decode($data, true);
        $carsCollection = collect($cars['Cars']);
        
        $rentedCars = RentCar::where('overdue', '>=' , Carbon::now())->get();

        $carsCollection->transform(function ($car) use ($rentedCars) {
            // echo $car['id'];
            foreach ($rentedCars as $rentCar) {
                if ($car['id'] == $rentCar['car_id']) {
                    $car['Availability'] = 'false';
                }
            }
            return $car;
        });


        return view('cars', compact('carsCollection'));
    }
}
