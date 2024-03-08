<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyCourses extends Migration
{

    public function up(): void
    {
        Schema::create('my_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->integer('user_id');
            $table->unique(['course_id', 'user_id']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('my_courses');
    }
}
