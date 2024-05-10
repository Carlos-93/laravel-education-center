<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
            TeacherCourseSeeder::class,
            CourseEnrollmentSeeder::class,
            ResourcesSeeder::class,
        ]);
    }
}