<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            'Welcome to the new semester!, Please remember to upload your syllabus.',
            'Please remember to upload your syllabus, and check your email for important updates.',
            'Staff meeting on Friday at 10 AM, please be on time.',
            'New teaching materials are available in the library, please check them out.',
            'Check your email for the latest updates, and let us know if you have any questions.',
            'Student evaluations start next week, please be prepared.',
            'Reminder: Grade submissions are due by the end of the month, please submit on time.',
            'Please update your office hours in the system, and let us know if you have any questions.',
            'Thank you for attending the professional development workshop, we hope you found it helpful.',
            'Let us know if you have any questions about the new curriculum, we are here to help.',
        ];

        for ($i = 2; $i <= 11; $i++) {
            DB::table('messages')->insert([
                'user_id' => $i,
                'message' => $messages[$i - 2],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
