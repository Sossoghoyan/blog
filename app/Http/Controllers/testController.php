<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        
            echo "barev"."<br>";

    }

    public function __construct()
    {
        $this->middleware('first');
   
    }

}








?>