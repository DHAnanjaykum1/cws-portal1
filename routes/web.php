<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;




Route::get('/', function () {
    return view('home');
});
Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
    Route::resource("course",CourseController::class);
    Route::resource("student",StudentController::class);
});
