<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'last_name' => 'first',
            'first_name' => 'theFirst',
            'email' => 'a@b.com',
            'username' => 'jft',
            'password' => bcrypt('1234567'),
            'phone' => '0000000',
            'created_at' => now()->subHours(5)
        ]);

        User::create([
            'last_name' => 'second',
            'first_name' => 'theSecond',
            'email' => 'a@c.com',
            'username' => 'jftSecond',
            'password' => bcrypt('1234567'),
            'phone' => '0000000',
            'created_at' => now()->addMinutes(5)
        ]);
    }
}
