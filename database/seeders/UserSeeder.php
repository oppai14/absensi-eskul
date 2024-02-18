<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            "name"=> "Admin",
            "role"=> "admin",
            "email"=> "admin@gmail.com",
            "password"=> bcrypt("12345"),
            "remember_token"=> str::random(60),
        ]);
    }
}
