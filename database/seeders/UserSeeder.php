<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' =>'Admin',
            'email' =>'abc1@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);

        $user = User::create([
            'name' =>'user',
            'email' =>'abc@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'user'
        ]);
    }
}
