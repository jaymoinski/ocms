<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@ocms',
                'is_admin'=>'1',
               'password'=> bcrypt('11221122'),
            ],
            [
               'name'=>'User',
               'email'=>'user@ocms',
                'is_admin'=>'0',
               'password'=> bcrypt('11221122'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
