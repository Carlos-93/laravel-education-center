<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createAdmin();
        $this->createTeacher();
        $this->createStudent();
    }

    private function createAdmin(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@monlau.com',
            'password' => Hash::make('admin123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    private function createTeacher(): void
    {
        $teacher = [
            'Ramón Aguilar',
            'Amador Diaz',
            'Josep Maria Herrera',
            'Roberto Manca',
            'Javier Salvador',
            'Adrià Serrando',
            'Carmen Quintás',
            'Judith Lopez',
            'Marta Sánchez',
            'Jordi Sánchez',
        ];

        $teachers = [];
        foreach ($teacher as $teacher) {
            $teachers[] = [
                'name' => $teacher,
                'role' => 'teacher',
                'email' => strtolower(str_replace(' ', '', $teacher)) . '@monlau.com',
                'password' => Hash::make('teacher123'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($teachers);
    }

    private function createStudent(): void
    {
        $student = [
            'Lucas Romero',
            'Martina García',
            'Mateo Torres',
            'Sofía Martínez',
            'Diego Sánchez',
            'Valeria López',
            'Hugo Fernández',
            'Daniela Rodríguez',
            'Liam Ramírez',
            'Alba Hernández',
            'Álvaro Díaz',
            'Isabella Cruz',
            'Pablo Pérez',
            'Sara Ortiz',
            'Leo Jiménez',
            'Noa Navarro',
            'Enzo Ramos',
            'Julia Gutiérrez',
            'Oliver Gómez',
            'Emma Morales',
            'Thiago Herrera',
            'Mía Ruiz',
            'Manuel Méndez'
        ];

        $students = [];
        foreach ($student as $student) {
            $students[] = [
                'name' => $student,
                'role' => 'student',
                'email' => strtolower(str_replace(' ', '', $student)) . '@monlau.com',
                'password' => Hash::make('student123'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($students);
    }
}
