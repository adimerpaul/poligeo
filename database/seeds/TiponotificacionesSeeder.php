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
        DB::table('tiponotificaciones')->insert(['nombre' => 'exito','color'=>'#2E7D32']);
        DB::table('tiponotificaciones')->insert(['nombre' => 'peligro','color'=>'#C62828']);
        DB::table('tiponotificaciones')->insert(['nombre' => 'alert','color'=>'#FFD740']);
        DB::table('tiponotificaciones')->insert(['nombre' => 'informacion','color'=>'#1565C0']);
    }
}
