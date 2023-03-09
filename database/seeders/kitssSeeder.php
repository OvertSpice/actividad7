<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kitssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kits')->insert([
            'nombre_kit' => 'StarterKit',
        ]);

        DB::table('kits')->insert([
            'nombre_kit' => 'Educational Robots Kit',
        ]);

        DB::table('kits')->insert([
            'nombre_kit' => 'Kit5',
        ]);
    }
}
