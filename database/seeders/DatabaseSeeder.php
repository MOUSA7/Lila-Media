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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Mousa',
            'user_name'=>'Mousa7',
            'email'=>'mousa@hotmail.com',
            'password'=>bcrypt('mousa123'),
            'role'=>'admin'
        ]);
    }
}
