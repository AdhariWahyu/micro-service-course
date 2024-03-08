<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviews extends Migration
{

    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->integer('rating')->default(1);
            $table->longText('note')->nullable();
            $table->unique(['course_id', 'user_id']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
}
