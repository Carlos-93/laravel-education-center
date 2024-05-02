<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CourseManagement;
use App\Livewire\UserManagement;

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta de inicio de sesión
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Ruta de administración de cursos
    Route::get('/course-management', CourseManagement::class)->name('course-management');
    
    // Ruta de administración de usuarios
    Route::get('/user-management', UserManagement::class)->name('user-management');
});
