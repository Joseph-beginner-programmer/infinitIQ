<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
=======
use App\Models\Course;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
<<<<<<< HEAD
public function run(): void
{
    // Buat 2 user: Test User & Jason
    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => bcrypt('admin123'),
    ]);

    User::factory()->create([
        'name' => 'Jason Wijaya',
        'email' => 'jason@example.com',
        'password' => bcrypt('admin123'),
    ]);

    // Jalankan seeder kategori
    $this->call(CategoriesSeeder::class);

    // Tambahkan ini dulu sebelum CourseSeeder
    $this->call(InstructorSeeder::class); // <--- 🛠️ HARUS ADA

    // Lalu ini
    $this->call(CourseSeeder::class);
}


=======
    public function run(): void
    {
        $this->call([
            CategoriesSeeder::class,
            InstructorSeeder::class,
            CourseSeeder::class,
            CoursePartSeeder::class
        ]);
    }
>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40
}
