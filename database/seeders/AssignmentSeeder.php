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
                'deadline' => Carbon::now()->addDays(7),
                'status' => 'open',
                'budget' => 150.00,
                'handyman_id' => 1,
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
                'deadline' => Carbon::now()->addDays(14),
                'status' => 'in_progress',
                'budget' => 300.00,
                'handyman_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($assignments as $assignment) {
            Assignment::create($assignment);
        }
    }
}
