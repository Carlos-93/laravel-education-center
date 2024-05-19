<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationalGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educational_games')->insert([
            'title' => 'Virtual Piano Game',
            'description' => 'Learn how to play the piano with this virtual piano game',
            'url' => 'http://localhost:5174/',
            'subject_area' => 'Music',
        ]);
    }
}