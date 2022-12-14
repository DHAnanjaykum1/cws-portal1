<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;




Route::get('/',[HomeController::class,"index"])->name("home");
Route::get('/view-course/{id}',[HomeController::class,"viewCourse"])->name("viewcourse");

Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
    Route::resource("course",CourseController::class);
    Route::resource("student",StudentController::class);
});
