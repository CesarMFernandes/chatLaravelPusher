<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            'name' => 'Fulano',
            'email' => 'fulano@gmail.com',
            'password' => 'senha123',
        ];

        DB::table('users')->insert($users);
    }
}
