<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        // $flights = Flight::all();
        // foreach ($flights as $flight) {
        //     echo $flight->name . "<br>";
        // }
        $flights = Flight::where('active', 1)
    ->orderBy('name', 'desc')
    ->take(2)
    ->get();
    foreach ($flights as $flight) {
            echo $flight->name . "<br>";
        }

    }


}
