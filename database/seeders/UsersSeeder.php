<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre_usuario' => 'Admon',
            'correo_usuario' => 'admon@robotics.com',
            'contrasena_usuario' => 'Adm@2022',
            'rol_usuario' => 'Administrativo',
            'grupo_usuario' => '1',
        ]);

        DB::table('users')->insert([
            'nombre_usuario' => 'Tecmilenio',
            'correo_usuario' => 'tecmilenio@robotics.com',
            'contrasena_usuario' => 'Adm@2022',
            'rol_usuario' => 'Profesor',
            'grupo_usuario' => '1',
        ]);

        DB::table('users')->insert([
            'nombre_usuario' => 'Estudiante',
            'correo_usuario' => 'student@robotics.com',
            'contrasena_usuario' => 'Adm@2022',
            'rol_usuario' => 'Estudiante',
            'grupo_usuario' => '1',
        ]);
    }
}
