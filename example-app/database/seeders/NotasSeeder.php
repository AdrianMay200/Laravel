<?php

namespace Database\Seeders;

use App\Models\notas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        notas::factory()
        ->count(150)
        ->create();
    }
}
