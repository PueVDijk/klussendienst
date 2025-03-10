<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'firstname' => 'Ferdy',
                'lastname' => 'van Klink',
                'email' => 'ferdy@gmail.com',
                'phonenumber' => '0620410676',
                'street' => 'Kerkstraat',
                'housenumber' => '1',
                'postal_code' => '1200AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
            [
                'firstname' => 'Pieter',
                'lastname' => 'van Dijk',
                'email' => 'pieter@gmail.com',
                'phonenumber' => '0623456789',
                'street' => 'Kerkstraat',
                'housenumber' => '2',
                'postal_code' => '1201AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
            [
                'firstname' => 'Silvio',
                'lastname' => 'de Boer',
                'email' => 'silvio@gmail.com',
                'phonenumber' => '0634567890',
                'street' => 'Kerkstraat',
                'housenumber' => '3',
                'postal_code' => '1202AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
            [
                'firstname' => 'Ahmed',
                'lastname' => 'Al-Ghurbani',
                'email' => 'ahmed@gmail.com',
                'phonenumber' => '0645678901',
                'street' => 'Kerkstraat',
                'housenumber' => '4',
                'postal_code' => '1203AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
