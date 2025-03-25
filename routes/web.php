<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "HomePage"]);
Route::get("/services", [HomeController::class, "ServicesPage"]);


// Route::get('/', function () {
//     return view('welcome');
// });


