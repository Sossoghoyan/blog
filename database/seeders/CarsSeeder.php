<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Car;



class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = Car::updateOrCreate(
            ['Brand' => 'Opel'],
            ['price' => 99, 'Model' => 'Astra']
        ); 
        DB::table('cars')->insert([

            'Brand' => 'Mercedes',
            'Model' => 'S-Class',
            'Year' => 2007,
            'Mileage' => 150000,
            'Color' => 'black',
            'Price' => 15000,
    
        ]);
    
    }

    

}
