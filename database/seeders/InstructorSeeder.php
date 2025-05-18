<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = [
            "Thompson Jefferson",
            "Marcel Sasongko",
            "Marco Alexander"
        ];

        for ($i = 0; $i < 3; $i++) {
            DB::table('instructors')->insert([
                "instructor_name" => $instructors[$i],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),                
            ]);
        }
    }
}
