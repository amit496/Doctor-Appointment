<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        $find_email = User::where('email', 'superadmin@gmail.com')->first();

        if (!isset($find_email)) {
            User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('123456'),
            ]);
        }


        $find_email = User::where('email', 'admin@gmail.com')->first();

        if (!isset($find_email)) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 'admin',
            ]);
        }

    }
}
