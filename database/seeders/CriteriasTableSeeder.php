<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('criterias')->insert([
            ['name' => 'Pengalaman kerja', 'type' => 'benefit'],
            ['name' => 'Pendidikan', 'type' => 'benefit'],
            ['name' => 'Usia', 'type' => 'benefit'],
            ['name' => 'Status perkawinan', 'type' => 'cost'],
            ['name' => 'Alamat', 'type' => 'cost'],
        ]);
    }
}
