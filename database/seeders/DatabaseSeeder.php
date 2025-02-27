<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Amoros',
            'email' => 'noukelois18@gmail.com',
            'password' => 'amoros',
            'is_admin' => true,
        ]);

        User::create([
            'name'=>'Name',
            'email'=>'sagittaire199@gmail.com',
            'password'=> 'sagittaire',
            'is_admin' => false,
        ]);

        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}

