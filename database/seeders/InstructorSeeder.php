<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use App\Models\Instructor;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40
use Carbon\Carbon;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
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
        Instructor::create([
            'name' => 'Joseph Evan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Instructor::create([
            'name' => 'Hans Anthony',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Instructor::create([
            'name' => 'Jason Keren',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
=======
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
>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40
    }
}
