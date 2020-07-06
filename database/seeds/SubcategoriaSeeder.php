<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategorias')->insert(['nombre' => 'Civil','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Alumno','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Policía','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Cabo','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Sargento Segundo','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Sargento Primero','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Suboficial Segundo','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Suboficial Primero','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Suboficial Mayor','categoria_id'=>1]);
        DB::table('subcategorias')->insert(['nombre' => 'Suboficial Superior','categoria_id'=>1]);

        DB::table('subcategorias')->insert(['nombre' => 'Cadete','categoria_id'=>2]);
        DB::table('subcategorias')->insert(['nombre' => 'Subteniente','categoria_id'=>2]);
        DB::table('subcategorias')->insert(['nombre' => 'Teniente','categoria_id'=>2]);
        DB::table('subcategorias')->insert(['nombre' => 'Capitán','categoria_id'=>2]);

        DB::table('subcategorias')->insert(['nombre' => 'Mayor','categoria_id'=>3]);
        DB::table('subcategorias')->insert(['nombre' => 'Teniente coronel','categoria_id'=>3]);
        DB::table('subcategorias')->insert(['nombre' => 'Coronel','categoria_id'=>3]);

        DB::table('subcategorias')->insert(['nombre' => 'General Superior','categoria_id'=>4]);
        DB::table('subcategorias')->insert(['nombre' => 'General Supervisor','categoria_id'=>4]);
        DB::table('subcategorias')->insert(['nombre' => 'Comandante General de la Policía','categoria_id'=>4]);
    }
}
