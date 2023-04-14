<?php

namespace Database\Seeders;

use App\Models\temas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        temas::factory()
        ->count(50)
        ->create();
    }
}
