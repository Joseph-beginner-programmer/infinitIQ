<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('course_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->integer('order')->default(0);
            $table->text('description')->nullable();
            $table->string('estimated_duration')->nullable(); // e.g., "1 Hour"

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_parts');
    }
};
