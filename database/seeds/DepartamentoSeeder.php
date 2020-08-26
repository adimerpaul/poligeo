<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert(['nombre'=>'Eucaliptus']);
        DB::table('departamentos')->insert(['nombre'=>'Oruro']);
        DB::table('departamentos')->insert(['nombre'=>'Huanuni']);
        DB::table('departamentos')->insert(['nombre'=>'Poopó']);
        DB::table('departamentos')->insert(['nombre'=>'Santiago de Huari']);
        DB::table('departamentos')->insert(['nombre'=>'Toledo']);
        DB::table('departamentos')->insert(['nombre'=>'Huayllamarca']);
        DB::table('departamentos')->insert(['nombre'=>'Totora']);
        DB::table('departamentos')->insert(['nombre'=>'Corque']);
        DB::table('departamentos')->insert(['nombre'=>'Santiago de Andamarca']);
        DB::table('departamentos')->insert(['nombre'=>'Salinas de Garcí Mendoza']);
        DB::table('departamentos')->insert(['nombre'=>'Huachacalla']);
        DB::table('departamentos')->insert(['nombre'=>'Curahuara de Carangas']);
        DB::table('departamentos')->insert(['nombre'=>'Sabaya']);
        DB::table('departamentos')->insert(['nombre'=>'La Rivera']);

    }
}
