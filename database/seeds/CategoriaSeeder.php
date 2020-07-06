<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['nombre' => 'AGENTES SUBALTERNOS']);
        DB::table('categorias')->insert(['nombre' => 'CATEGORÍA OFICIALES SUB ALTERNOS']);
        DB::table('categorias')->insert(['nombre' => 'CATEGORÍA OFICIALES MAYORES']);
        DB::table('categorias')->insert(['nombre' => 'CATEGORÍA GENERALES']);
    }
}
