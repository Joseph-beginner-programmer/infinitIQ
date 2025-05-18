<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            // Foreign Keys
            $table->foreignId('instructor_id')->constrained('instructors', 'id')->onDelete('cascade'); // assuming instructors are users
            $table->foreignId('category_id')->constrained('categories', 'id')->onDelete('cascade');

            // Course Length
            $table->integer('length_value'); // e.g., 1, 2, 3
            $table->enum('length_unit', ['day', 'week', 'month']); // enum for standard units

            // Level (optional FK or enum/string)
            $table->enum('level', ['beginner', 'intermediate', 'advanced'])->default('beginner');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
