<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageCourses extends Migration
{

    public function up(): void
    {
        Schema::create('image_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('image_courses');
    }
}
