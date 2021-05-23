<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::insert([
            'name' => 'Budi',
            'email' => 'budi@gmail.com',
            'password' => Hash::make("asdasd"),
            'avatar_url' => '1.png'
        ]);  
    }
}
