<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Michael',
            'email' => 'michael@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'noTelepon' => '0123456789',
            'alamat' => 'whereveryouare',
            'role' => 'user',
            'remember_token' => Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
} 
