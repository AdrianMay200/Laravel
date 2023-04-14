<?php

namespace Database\Seeders;

use App\Models\recordatorios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordatoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        recordatorios::factory()
        ->count(150)
        ->create();
    }
}
