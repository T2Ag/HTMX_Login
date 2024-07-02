<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Tito',
            'email' => 'tito@t',
            'email_verified_at' => null,
            'password' => Hash::make('123123123'), // Hashing the password
            'remember_token' => Str::random(10),
        ]);
    }
}
