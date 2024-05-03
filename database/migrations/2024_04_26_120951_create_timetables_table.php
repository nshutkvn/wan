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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("course_id");
            $table->unsignedBigInteger("period_id");
            $table->unsignedBigInteger("class_id");
            $table->unsignedBigInteger("users_id");
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('class_id')->references('id')->on('classrooms');
            $table->foreign('period_id')->references('id')->on('periods');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
