<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route to display all students
Route::get('/students', [StudentController::class, 'index']);

// Route to display a specific student
Route::get('/students/{id}', [StudentController::class, 'show']);