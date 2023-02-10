<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $users = [
            [
                'name' => 'Wildan',
                'email'=> 'wildan@mail.test',
                'email_verified_at'=> '2023-03-09 00:00:00',
                'password' => Hash::make('wildan123'),
                'remember_token' => '',
                'created_at' => '2023-03-09 00:00:00',
                'updated_at' => '2023-03-09 00:00:00',
            ]
        ];

        User::insert($users);
    }
}
