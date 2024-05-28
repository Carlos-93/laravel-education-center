<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resources')->insert([
            ['course_id' => 1, 'title' => 'Dummy PDF', 'resource_type' => 'pdf', 'url' => 'https://www.rd.usda.gov/sites/default/files/pdf-sample_0.pdf', 'content' => 'prueba pdf', 'uploaded_by' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'title' => 'Dummy PDF 2', 'resource_type' => 'pdf', 'url' => 'https://www.rd.usda.gov/sites/default/files/pdf-sample_0.pdf', 'content' => null, 'uploaded_by' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
