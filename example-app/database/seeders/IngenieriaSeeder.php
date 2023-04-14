<?php

namespace Database\Seeders;

use App\Models\ingenieria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class IngenieriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ingenieria::factory()
        ->count(150)
        ->create();
    }
}
