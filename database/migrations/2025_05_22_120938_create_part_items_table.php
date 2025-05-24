<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('course_part_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_part_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->integer('lesson_number')->default(0);
            $table->string('duration')->nullable(); // e.g., "45 Minutes"
            $table->text('content')->nullable(); // materi text/video/link

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_part_items');
    }
};
