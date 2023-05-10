<?php

namespace App\Http\Controllers;

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
        
        return view('cars', compact('carsCollection'));
    }
}
