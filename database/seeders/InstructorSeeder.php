<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instructor;
use Carbon\Carbon;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instructor::create([
            'name' => 'Thompson Jefferson',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Instructor::create([
            'name' => 'Marcel Sasongko',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Instructor::create([
            'name' => 'Marco Alexander',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
