<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            [
                'name' => 'Male',
                'abbreviation' => 'M',
                'slug' => 'male',
                'description' => 'Male gender',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Female',
                'abbreviation' => 'F',
                'slug' => 'female',
                'description' => 'Female gender',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Other',
                'abbreviation' => 'O',
                'slug' => 'other',
                'description' => 'Other gender identity',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Prefer Not to Say',
                'abbreviation' => 'PNS',
                'slug' => 'prefer-not-to-say',
                'description' => 'User prefers not to disclose gender',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('genders')->insert($genders);
        
        $this->command->info('Genders seeded successfully!');
    }
}
