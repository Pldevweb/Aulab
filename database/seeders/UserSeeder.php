<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hashedPassword = bcrypt('password');

        User::factory()->create([
            'admin' => '1',
            'name' => 'Admin',
            'email' => 'email@email.com',
            'password' => $hashedPassword,
            'remember_token' => Str::random(10),
        ]);
    }
}
