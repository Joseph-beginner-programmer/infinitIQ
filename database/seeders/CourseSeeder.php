<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course_list = [
            ["Design Web with Thompson", "Learn how to design a good website with and figma and Thompson. He is a good teacher but very bad lookin", 1, 2, 1, "month", "intermediate"],
            ["RPL with Marcel", "Learn the fundamentals of software engineering project design and planning", 2, 3, 3, "week", "advanced"]
        ];

        for ($i = 0; $i < 2; $i++) {
            $course = $course_list[$i];
            DB::table('courses')->insert([
                "title" => $course[0],
                "description" => $course[1],
                "instructor_id" => $course[2],
                "category_id" => $course[3],
                "length_value" => $course[4],
                "length_unit" => $course[5],
                "level" => $course[6],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),                
            ]);
        }


    }
}
