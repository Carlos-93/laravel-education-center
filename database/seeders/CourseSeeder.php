<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['title' => 'Python', 'description' => 'A versatile and popular programming language', 'image' => 'images/python.png'],
            ['title' => 'JavaScript', 'description' => 'A core language for web development, used in both frontend and backend', 'image' => 'images/javascript.png'],
            ['title' => 'PHP', 'description' => 'A server-side scripting language used for web development', 'image' => 'images/php.png'],
            ['title' => 'Java', 'description' => 'A widely-used programming language for enterprise applications', 'image' => 'images/java.png'],
            ['title' => 'C#', 'description' => 'A powerful programming language used for desktop and web applications', 'image' => 'images/csharp.png'],
            ['title' => 'Laravel', 'description' => 'A popular PHP framework for web development', 'image' => 'images/laravel.png'],
            ['title' => 'React', 'description' => 'A JavaScript library for building user interfaces', 'image' => 'images/react.png'],
            ['title' => 'Vue.js', 'description' => 'A progressive JavaScript framework for building user interfaces', 'image' => 'images/vuejs.png'],
            ['title' => 'Angular', 'description' => 'A platform and framework for building single-page client applications', 'image' => 'images/angular.png'],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
