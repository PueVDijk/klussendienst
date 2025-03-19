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
                'street' => 'Rembrandt van Rijnsingel',
                'housenumber' => '10',
                'postal_code' => '2305 IL',
                'city' => 'Roelofarendsveen',
                'password' => bcrypt('Ferdy3110'),
                'role' => 'admin',
            ],
            [
                'firstname' => 'Pieter',
                'lastname' => 'van Dijk',
                'email' => 'pieter@gmail.com',
                'phonenumber' => '0623456789',
                'street' => 'Sesamstraat',
                'housenumber' => '7',
                'postal_code' => '1201AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('Pieter2511'),
                'role' => 'admin',
            ],
            [
                'firstname' => 'Silvio',
                'lastname' => 'de Boer',
                'email' => 'silvio@gmail.com',
                'phonenumber' => '0634567890',
                'street' => 'Ossostraat',
                'housenumber' => '94',
                'postal_code' => '1202AB',
                'city' => 'Haarlem',
                'password' => bcrypt('SilvioBR'),
                'role' => 'admin',
            ],
            [
                'firstname' => 'Ahmed',
                'lastname' => 'Al-Ghurbani',
                'email' => 'ahmed@gmail.com',
                'phonenumber' => '0645678901',
                'street' => 'Kerkstraat',
                'housenumber' => '2',
                'postal_code' => '1203AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('AhmedAGI'),
                'role' => 'admin',
            ],
            [
                'firstname' => 'Jeroen',
                'lastname' => 'van der Meulen',
                'email' => 'jeroen@gmail.com',
                'phonenumber' => '0656789012',
                'street' => 'Kerkstraat',
                'housenumber' => '5',
                'postal_code' => '1204AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('password'),
                'role' => 'provider',
            ],
            [
                'firstname' => 'Joost',
                'lastname' => 'Versteeg',
                'email' => 'joost@gmail.com',
                'phonenumber' => '0667890123',
                'street' => 'Kerkstraat',
                'housenumber' => '6',
                'postal_code' => '1205AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('password'),
                'role' => 'handyman',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
