<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    // public function run()
    // {
    //     for ($i = 0; $i < 1; $i++) {
    //         User::factory()->create();
    //     }
    // }
    public function run()
    {
        User::create([
            'name' => 'RootAdmin',
            'email' => 'admin@admin',
            'email_verified_at' => now(),
            'password' => Hash::make('admin@admin'),
            'remember_token' => Str::random(10),
        ]);
    }
}
