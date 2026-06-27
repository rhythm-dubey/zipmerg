<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boards = [
            [
                'name' => 'Central Board of Secondary Education',
                'slug' => 'cbse',
                'description' => 'India\'s premier national board of education, serving both public and private schools.',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Indian Certificate of Secondary Education',
                'slug' => 'icse',
                'description' => 'A private, non-governmental board of school education in India, known for its comprehensive and rigorous curriculum.',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rajasthan Board of Secondary Education',
                'slug' => 'rbse',
                'description' => 'The state-level board of education for the state of Rajasthan, responsible for conducting secondary and senior secondary examinations.',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'State Board of Maharashtra',
                'slug' => 'msbshse',
                'description' => 'The state board of education for Maharashtra, one of the largest educational boards in India.',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'International Baccalaureate',
                'slug' => 'ib',
                'description' => 'A globally recognized international educational foundation offering four highly respected programs for students aged 3 to 19.',
                'sort_order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('academic_boards')->insert($boards);
    }
}
