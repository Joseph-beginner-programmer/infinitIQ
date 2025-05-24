<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
public function run(): void
{
    // Buat 2 user: Test User & Jason
    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    User::factory()->create([
        'name' => 'Jason Wijaya',
        'email' => 'jason@example.com',
    ]);

    // Jalankan seeder kategori
    $this->call(CategoriesSeeder::class);

    // Tambahkan ini dulu sebelum CourseSeeder
    $this->call(InstructorSeeder::class); // <--- 🛠️ HARUS ADA

    // Lalu ini
    $this->call(CourseSeeder::class);
}


}
