<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'name' => 'Carlos Araujo',
            'role' => 'admin',
            'email' => 'carlos@monlau.com',
            'password' => Hash::make('admin123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Roberto Manca',
            'role' => 'teacher',
            'email' => 'roberto@monlau.com',
            'password' => Hash::make('teacher123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Javier Salvador',
            'role' => 'teacher',
            'email' => 'javier@monlau.com',
            'password' => Hash::make('teacher123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Carmen Quintás',
            'role' => 'teacher',
            'email' => 'carmen@monlau.com',
            'password' => Hash::make('teacher123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Josep Maria',
            'role' => 'teacher',
            'email' => 'josepmaria@monlau.com',
            'password' => Hash::make('teacher123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Adria Serrano',
            'role' => 'teacher',
            'email' => 'adria@monlau.com',
            'password' => Hash::make('teacher123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Josep Miquel',
            'role' => 'student',
            'email' => 'josep@monlau.com',
            'password' => Hash::make('student123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Albert Soriano',
            'role' => 'student',
            'email' => 'albert@monlau.com',
            'password' => Hash::make('student123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Carles Sanchez',
            'role' => 'student',
            'email' => 'carles@monlau.com',
            'password' => Hash::make('student123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Marc Marquès',
            'role' => 'student',
            'email' => 'marc@monlau.com',
            'password' => Hash::make('student123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Ruben Sanz',
            'role' => 'student',
            'email' => 'ruben@monlau.com',
            'password' => Hash::make('student123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
