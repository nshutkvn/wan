<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('course');
});

Route::post('/create-course', [App\Http\Controllers\CourseController::class,  'saveCourses']);


Route::get('/get-course', [App\Http\Controllers\CourseController::class,  'retrieveCourse']);


Route::get('/edit/{id}', [App\Http\Controllers\CourseController::class,  'GetUpdateCourseFrm']);

Route::get('/delete/{id}', [App\Http\Controllers\CourseController::class,  'deleteCourse']);

Route::post('/update-course/{id}', [App\Http\Controllers\CourseController::class,  'UpdateCourse']);