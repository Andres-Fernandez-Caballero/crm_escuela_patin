<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        User::create([
            'name'=> 'BarSudini',
            'email'=> 'Barbara.sudini@gmail.com',
            'password' => bcrypt('Apanovi.2024'),
            ]);
    }
}
