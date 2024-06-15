<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'mimmo@gmail.com',
            'name' => 'mimmo',
            'password' => Hash::make('admin'),
            

        ]);

        User::create([
            'email' => 'orlando@gmail.com',
            'name' => 'orlando',
            'password' => Hash::make('admin'),
            

        ]);

        User::create([
            'email' => 'antonino@gmail.com',
            'name' => 'antonino',
            'password' => Hash::make('admin'),
            

        ]);

        User::create([
            'email' => 'marina@gmail.com',
            'name' => 'marina',
            'password' => Hash::make('admin'),
            

        ]);

        User::create([
            'email' => 'andrea@gmail.com',
            'name' => 'andrea',
            'password' => Hash::make('admin'),
            

        ]);

        User::create([
            'email' => 'carmine@gmail.com',
            'name' => 'carmine',
            'password' => Hash::make('admin'),
            

        ]);

        
    }
}
