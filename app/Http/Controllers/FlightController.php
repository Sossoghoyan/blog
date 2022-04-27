<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\Log;

class FlightController extends Controller
{
    public function index(Request $request)
    {
        Log::debug('test');
        dd($request->all());
        // $max = Flight::where('active', 1)->max('price');
        // echo $max . "<br>";
        // $flight = Flight::where('active', 1)->orderBy('price', 'desc')->first();
        // dd($flight->toArray());


        // $flights = Flight::all();
        // foreach ($flights as $flight) {
        //     echo $flight->name . "<br>";
        // }
    //     $flights = Flight::where('active', 1)
    // ->orderBy('name', 'desc')
    // ->take(2)
    // ->get();
    // foreach ($flights as $flight) {
    //         echo $flight->name . "<br>";
    //     }

    // $flight = Flight::updateOrCreate(
    //     ['name' => 'Flight 10'],
    //     ['price' => 99, 'number' => 'Af-10']
    // );
      //      $flight = Flight::find(6);
      //  $flight->delete();



   }


}
