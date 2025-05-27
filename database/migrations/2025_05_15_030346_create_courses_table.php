<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            // Relasi ke users (as instructor) dan categories
            $table->foreignId('instructor_id')->constrained('instructors');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');

            // Lama kursus
            $table->integer('length_value');
            $table->enum('length_unit', ['day', 'week', 'month']);


            // Level dan tambahan opsional
            $table->enum('level', ['beginner', 'intermediate', 'advanced'])->default('beginner');
            $table->string('image_path_1');
            $table->string('image_path_2');
            $table->string('image_path_3');
            $table->float('rating')->default(0);
            $table->integer('review_count')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
