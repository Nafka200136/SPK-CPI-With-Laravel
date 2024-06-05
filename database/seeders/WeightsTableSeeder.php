<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('weights')->insert([
            ['criteria_id' => 1, 'value' => 0.30],
            ['criteria_id' => 2, 'value' => 0.20],
            ['criteria_id' => 3, 'value' => 0.20],
            ['criteria_id' => 4, 'value' => 0.15],
            ['criteria_id' => 5, 'value' => 0.15],
        ]);
    }
}
