<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProjectApiController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/* -------- Main Pages ------ */
Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/about-me', [Controller::class, 'about'])->name('about-me');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/internship', [Controller::class, 'internship'])->name('internship');

/* -------- projects -------- */
Route::get('/projects/manage', [ProjectController::class, 'manage'])->name('manage');
Route::resource('projects', ProjectController::class);
Route::resource('/images', ImageController::class);
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
