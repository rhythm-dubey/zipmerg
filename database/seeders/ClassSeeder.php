<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boards = DB::table('academic_boards')->pluck('id', 'slug')->toArray();

        if (empty($boards)) {
            $this->command->warn('No academic boards found. Please run AcademicBoard seeder first.');
            return;
        }

        $classes = [
            // CBSE Classes
            [
                'name' => 'class-1',
                'display_name' => 'Class 1',
                'slug' => 'cbse-class-1',
                'level' => 1,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 1 - Foundation year for primary education',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-2',
                'display_name' => 'Class 2',
                'slug' => 'cbse-class-2',
                'level' => 2,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 2 - Building basic concepts',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-3',
                'display_name' => 'Class 3',
                'slug' => 'cbse-class-3',
                'level' => 3,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 3 - Intermediate primary level',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-4',
                'display_name' => 'Class 4',
                'slug' => 'cbse-class-4',
                'level' => 4,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 4 - Advanced primary concepts',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-5',
                'display_name' => 'Class 5',
                'slug' => 'cbse-class-5',
                'level' => 5,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 5 - Bridge to middle school',
                'sort_order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-6',
                'display_name' => 'Class 6',
                'slug' => 'cbse-class-6',
                'level' => 6,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 6 - Middle school begins',
                'sort_order' => 6,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-7',
                'display_name' => 'Class 7',
                'slug' => 'cbse-class-7',
                'level' => 7,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 7 - Deeper subject understanding',
                'sort_order' => 7,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-8',
                'display_name' => 'Class 8',
                'slug' => 'cbse-class-8',
                'level' => 8,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 8 - Advanced middle school',
                'sort_order' => 8,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-9',
                'display_name' => 'Class 9',
                'slug' => 'cbse-class-9',
                'level' => 9,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 9 - Secondary school begins',
                'sort_order' => 9,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-10',
                'display_name' => 'Class 10',
                'slug' => 'cbse-class-10',
                'level' => 10,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 10 - Secondary school final year',
                'sort_order' => 10,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-11',
                'display_name' => 'Class 11',
                'slug' => 'cbse-class-11',
                'level' => 11,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 11 - Senior secondary begins',
                'sort_order' => 11,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'class-12',
                'display_name' => 'Class 12',
                'slug' => 'cbse-class-12',
                'level' => 12,
                'academic_board_id' => $boards['cbse'] ?? null,
                'description' => 'CBSE Class 12 - Senior secondary final year',
                'sort_order' => 12,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // ICSE Classes
            [
                'name' => 'class-1',
                'display_name' => 'Class 1',
                'slug' => 'icse-class-1',
                'level' => 1,
                'academic_board_id' => $boards['icse'] ?? null,
                'description' => 'ICSE Class 1 - Foundation year with comprehensive curriculum',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ... (ICSE ke liye bhi aise hi class 2 se 12 tak add kar sakte hain)
            
            // RBSE Classes - Example
            [
                'name' => 'class-1',
                'display_name' => 'Class 1',
                'slug' => 'rbse-class-1',
                'level' => 1,
                'academic_board_id' => $boards['rbse'] ?? null,
                'description' => 'RBSE Class 1 - Foundation year for Rajasthan board',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into 'classes' table
        DB::table('classes')->insert($classes);
        
        $this->command->info('Academic classes seeded successfully!');
    }
}
