<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Scores for each candidate and criteria
        $scores = [
            // Doni Prakosa (A1)
            ['candidate_id' => 1, 'criteria_id' => 1, 'value' => 0.5],
            ['candidate_id' => 1, 'criteria_id' => 2, 'value' => 1],
            ['candidate_id' => 1, 'criteria_id' => 3, 'value' => 0.7],
            ['candidate_id' => 1, 'criteria_id' => 4, 'value' => 0.7],
            ['candidate_id' => 1, 'criteria_id' => 5, 'value' => 0.8],

            // Dion Pratama (A2)
            ['candidate_id' => 2, 'criteria_id' => 1, 'value' => 0.8],
            ['candidate_id' => 2, 'criteria_id' => 2, 'value' => 0.7],
            ['candidate_id' => 2, 'criteria_id' => 3, 'value' => 1],
            ['candidate_id' => 2, 'criteria_id' => 4, 'value' => 0.5],
            ['candidate_id' => 2, 'criteria_id' => 5, 'value' => 1],

            // Dina Ayu Palupi (A3)
            ['candidate_id' => 3, 'criteria_id' => 1, 'value' => 1],
            ['candidate_id' => 3, 'criteria_id' => 2, 'value' => 0.3],
            ['candidate_id' => 3, 'criteria_id' => 3, 'value' => 0.4],
            ['candidate_id' => 3, 'criteria_id' => 4, 'value' => 0.7],
            ['candidate_id' => 3, 'criteria_id' => 5, 'value' => 0.5],

            // Dini Ambarwati (A4)
            ['candidate_id' => 4, 'criteria_id' => 1, 'value' => 0.2],
            ['candidate_id' => 4, 'criteria_id' => 2, 'value' => 1],
            ['candidate_id' => 4, 'criteria_id' => 3, 'value' => 0.5],
            ['candidate_id' => 4, 'criteria_id' => 4, 'value' => 0.9],
            ['candidate_id' => 4, 'criteria_id' => 5, 'value' => 0.7],

            // Danu Nugraha (A5)
            ['candidate_id' => 5, 'criteria_id' => 1, 'value' => 1],
            ['candidate_id' => 5, 'criteria_id' => 2, 'value' => 0.7],
            ['candidate_id' => 5, 'criteria_id' => 3, 'value' => 0.4],
            ['candidate_id' => 5, 'criteria_id' => 4, 'value' => 0.4],
            ['candidate_id' => 5, 'criteria_id' => 5, 'value' => 1],
        ];

        DB::table('scores')->insert($scores);

    }
}
