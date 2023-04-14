<?php

namespace Database\Seeders;

use App\Models\ingenieria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IngenieriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('ingenierias')->insert([
            'nombre' => 'ISC',
            'clave'  => '195665',
        ]);

        DB::table('ingenierias')->insert([
            'nombre' => 'II',
            'clave'  => '195779'
        ]);

        DB::table('ingenierias')->insert([
            'nombre' => 'IEM',
            'clave'  => '126262',
        ]);

        DB::table('ingenierias')->insert([
            'nombre' => 'IE',
            'clave'  => '685940',
        ]);

        DB::table('ingenierias')->insert([
            'nombre' => 'IER',
            'clave'  => '195665'
        ]);
    
    }
}
