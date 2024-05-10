<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacher_courses = [
            // Ramón Aguilar Pere enseña 3 cursos
            ['user_id' => 2, 'course_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'course_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'course_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Amador Diaz enseña 2 cursos
            ['user_id' => 3, 'course_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'course_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Josep Maria Herrera enseña 3 cursos
            ['user_id' => 4, 'course_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 4, 'course_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 4, 'course_id' => 6, 'created_at' => now(), 'updated_at' => now()],

            // Roberto Manca enseña 2 cursos
            ['user_id' => 5, 'course_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 5, 'course_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Javier Salvador enseña 2 cursos
            ['user_id' => 6, 'course_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 6, 'course_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Adrià Serrando enseña 3 cursos
            ['user_id' => 7, 'course_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 7, 'course_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 7, 'course_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Carmen Quintás enseña 2 cursos
            ['user_id' => 8, 'course_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 8, 'course_id' => 6, 'created_at' => now(), 'updated_at' => now()],

            // Judith Lopez enseña 2 cursos
            ['user_id' => 9, 'course_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 9, 'course_id' => 6, 'created_at' => now(), 'updated_at' => now()],

            // Marta Sánchez enseña 3 cursos
            ['user_id' => 10, 'course_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 10, 'course_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 10, 'course_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Jordi Sánchez enseña 2 cursos
            ['user_id' => 11, 'course_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 11, 'course_id' => 4, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('teachers')->insert($teacher_courses);
    }
}