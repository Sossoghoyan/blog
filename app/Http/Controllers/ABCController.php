<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ABCController extends Controller
{
    public function index() {
        $countries = DB::table('countries')->paginate(40);
        return view(
            'countries.index',
            ['countries' => $countries]
        );
    }

}
