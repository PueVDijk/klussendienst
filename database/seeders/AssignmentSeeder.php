<?php

namespace Database\Seeders;

use App\Models\Assignment;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assignments = [
            [
                'name' => 'Fix Plumbing Leak',
                'description' => 'Repair a leaking pipe in the kitchen.',
                'street' => 'Maple Street',
                'housenumber' => '123',
                'postal_code' => '12345',
                'city' => 'Springfield',
                'deadline' => now()->addDays(14),
                'status' => 'Open',
                'budget' => 150.00,
                'handyman_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paint Living Room',
                'description' => 'Paint the living room walls and ceiling.',
                'street' => 'Oak Avenue',
                'housenumber' => '456',
                'postal_code' => '54321',
                'city' => 'Greenville',
                'deadline' => now()->addDays(14),
                'status' => 'In Progress',
                'budget' => 300.00,
                'handyman_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($assignments as $assignment) {
            Assignment::create($assignment);
        }
    }
}
