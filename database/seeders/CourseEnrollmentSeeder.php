<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseEnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course_enrollments')->insert([
            'user_id' => 10,
            'course_id' => 1,
            'enrollment_date' => now(),
            'status' => 'enrolled',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('course_enrollments')->insert([
            'user_id' => 1,
            'course_id' => 1,
            'enrollment_date' => now(),
            'status' => 'enrolled',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
