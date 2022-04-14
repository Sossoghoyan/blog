<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($id, Request $request)
    {
        //DB::table('users')->where('role', 'admin')->add();
       // echo 222;
        // DB::table('companies')->insert(
        //     [
        //     ['title' => 'Facebook'],
        //     ['title' => 'TikTok'],
        //     ]
        // );

    //     $affected = DB::table('users')
    // ->where('id', 1)
    // ->update(['role' => 'admin']);

    // DB::table('users')
    // ->updateOrInsert(
    //     ['email' => 'john@example.com', 'name' => 'John'],
    //     ['password' => '456']
    // );

        ///                tnayin              ///

    // DB::table('countries')->insert(
    //         ['name' => 'Artsakh']
    //     );

DB::table('countries')
    ->updateOrInsert(
        ['name' => 'Artsakh'],
        ['code' => '051', 'iso_code' => 'AM', 'iso3_code' => 'ARM',
        'iso_3166_2' => 'ISO 3166-2:AM',
        'region_code' => '142', 'region_name' => 'Asia',
        'sub_region_code' => '145', 'sub_region_name' => 'Western Asia'],
);

 $count = DB::table('countries')->where('name', 'Artsakh')->get();//first()
        dd($count);


        ///             das     ///

        //$users = DB::table('users')->where('name', 'Sos')->first();//get();
        //dd($users);
        //dd($request->all());
        //echo "This is User with ID $id";
    }

}
