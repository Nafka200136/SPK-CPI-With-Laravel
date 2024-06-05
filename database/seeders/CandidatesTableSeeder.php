<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidates')->insert([
            ['name' => 'Doni Prakosa'],
            ['name' => 'Dion Pratama'],
            ['name' => 'Dina Ayu Palupi'],
            ['name' => 'Dini Ambarwati'],
            ['name' => 'Danu Nugraha'],
        ]);
    }
}
