<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CoursePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course_part_list = [
            [1, "Introduction to Figma", 1],
            [1, "Wireframing Basics", 2],
            [2, "Agile Development", 1],
            [2, "Scrum Method", 2]
        ];

        for ($i = 0; $i < 2; $i++) {
            $course_part = $course_part_list[$i];
            DB::table('course_parts')->insert([
                "course_id" => $course_part[0],
                "title" => $course_part[1],
                "order" => $course_part[2],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),                
            ]);
        }
    }
}
