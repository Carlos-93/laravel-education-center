<?php

use App\Livewire\CourseDetails;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserManagement;
use App\Livewire\Courses;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Courses
    Route::get('/courses', Courses::class)->name('courses');

    // Course Details
    Route::get('/courses/{courseId}', CourseDetails::class)->name('course-details');

    // Tech-Play Education Games
    Route::get('/tech-play-education-games')->name('tech-play-education-games');

    // Calendar
    Route::get('/calendar')->name('calendar');

    // Grades
    Route::get('/grades')->name('grades');

    // User Management
    Route::get('/user-management', UserManagement::class)->name('user-management');

    // Support
    Route::get('/support')->name('support');
});
