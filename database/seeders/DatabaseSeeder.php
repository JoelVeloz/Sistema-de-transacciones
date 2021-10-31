<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => "Joel Veloz",
            'email' => "joel.edu.v@gmail.com",
            'password' => bcrypt("12345678"), // passwor
        ]);
        \App\Models\User::factory(1)->create();
    }
}
