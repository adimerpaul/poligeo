<?php

use Illuminate\Database\Seeder;

class TiponotificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiponotificaciones')->insert(['nombre' => 'Exito','color'=>'#2E7D32']);
        DB::table('tiponotificaciones')->insert(['nombre' => 'Peligro','color'=>'#C62828']);
        DB::table('tiponotificaciones')->insert(['nombre' => 'Alert','color'=>'#FFD740']);
        DB::table('tiponotificaciones')->insert(['nombre' => 'Información','color'=>'#1565C0']);
    }
}
