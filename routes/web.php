<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "HomePage"]);
Route::get("/services", [HomeController::class, "ServicesPage"]);

Route::get("/students", [StudentController::class, "index"])->name("student.index");
Route::get("/students/create", [StudentController::class, "createForm"])->name("student.createForm");
Route::post("/students/store", [StudentController::class, "storeStudent"])->name("student.store");

// Route::get('/', function () {
//     return view('welcome');
// });


