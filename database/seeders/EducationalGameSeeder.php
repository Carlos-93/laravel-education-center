<?php

namespace Database\Seeders;

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
            'description' => 'Learn how to play the piano with this piano game',
            'url' => 'http://localhost:5174/',
            'subject_area' => 'Music',
            'image' => 'images/piano-game.png',
        ]);

        DB::table('educational_games')->insert([
            'title' => 'Physics Hangman Game',
            'description' => 'Learn physics terms with this hangman game',
            'url' => 'http://localhost:5175/',
            'subject_area' => 'Physics',
            'image' => 'images/hangman-game.png',
        ]);
    }
}