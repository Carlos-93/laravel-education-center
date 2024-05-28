<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\UserManagement;
use App\Livewire\Courses\Courses;
use App\Livewire\Courses\CourseDetails;
use App\Livewire\Games\EducationalGames;
use App\Livewire\StaffChat;

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
    Route::get('/courses/{courseId}', CourseDetails::class)->name('courses.course-details');

    // Games
    Route::get('/games', EducationalGames::class)->name('games');

    // Calendar
    Route::get('/calendar')->name('calendar');

    // Grades
    Route::get('/grades')->name('grades');

    // Messages Staff Room
    Route::get('/staff-chat', StaffChat::class)->name('staff-chat');

    // User Management
    Route::get('/user-management', UserManagement::class)->name('user-management');

    // Support
    Route::get('/support')->name('support');
});
