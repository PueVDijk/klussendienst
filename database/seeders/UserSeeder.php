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
                'phonenumber' => '0612345678',
                'street' => 'Kerkstraat',
                'housenumber' => '1',
                'postal_code' => '1200AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('password'),
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
                'password' => bcrypt(''),
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
                'password' => bcrypt(''),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
