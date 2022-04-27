<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       // $this->call(UsersTableTasks::class,);
       // $this->call(CarsSeeder::class,);

        //$this->call(UserSeeder::class);

        $this->call(BrandSeeder::class,);
        $this->call(ProductSeeder::class,);


    }
}
