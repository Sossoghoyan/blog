<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($id, Request $request)
    {
        DB::table('users')->where('role', 'admin')->add();
        echo 222;
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

 //$count = DB::table('countries')->where('name', 'Artsakh')->get();//first()
        //dd($count);


        ///             das     ///

        //$users = DB::table('users')->where('name', 'Sos')->first();//get();
        //dd($users);
        //dd($request->all());
        //echo "This is User with ID $id";
    }

}
