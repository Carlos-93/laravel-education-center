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
            ['title' => 'Python', 'description' => 'A versatile and popular programming language'],
            ['title' => 'JavaScript', 'description' => 'A core language for web development, used in both frontend and backend'],
            ['title' => 'PHP', 'description' => 'A server-side scripting language used for web development'],
            ['title' => 'Java', 'description' => 'A widely-used programming language for enterprise applications'],
            ['title' => 'C#', 'description' => 'A powerful programming language used for desktop and web applications'],
            ['title' => 'Laravel', 'description' => 'A popular PHP framework for web development'],
            ['title' => 'React', 'description' => 'A JavaScript library for building user interfaces'],
            ['title' => 'Vue.js', 'description' => 'A progressive JavaScript framework for building user interfaces'],
            ['title' => 'Angular', 'description' => 'A platform and framework for building single-page client applications'],
            ['title' => 'Django', 'description' => 'A high-level Python web framework for rapid development'],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}