<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class countries extends Controller
{
    public function show()
    {
        $countries = DB::table('countries')->get();
        //dd($countries);
        //foreach($countries as $country){
        //echo $country->name;
        return view('dropdown', ['countries'=>$countries]);
    //}
        //print_r($name);
    }

}
