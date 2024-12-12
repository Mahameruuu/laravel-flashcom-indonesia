<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\StudentController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('mentors', MentorController::class);
Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');
Route::post('/mentors', [MentorController::class, 'store'])->name('mentors.store');
// Route::get('/mentors', 'MentorController@index');
// Route::get('/mentors/export_excel', 'MentorController@export_excel');
Route::post('/mentors/import_excel', [MentorController::class, 'import_excel'])->name('mentors.import_excel');