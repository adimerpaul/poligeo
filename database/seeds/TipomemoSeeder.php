<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TipomemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipomemos')->insert(['nombre'=>'Control de terminales aereos y terrestres','memo_id'=>1]);
        DB::table('tipomemos')->insert(['nombre'=>'Control de buses','memo_id'=>1]);
        DB::table('tipomemos')->insert(['nombre'=>'Control de lenocinios, moteles y alojamientos','memo_id'=>1]);
        DB::table('tipomemos')->insert(['nombre'=>'Robos frustrados','memo_id'=>1]);
        DB::table('tipomemos')->insert(['nombre'=>'Hurtos frustrados','memo_id'=>1]);
        DB::table('tipomemos')->insert(['nombre'=>'Recuperacion de objetos robados y hurtados','memo_id'=>1]);
        DB::table('tipomemos')->insert(['nombre'=>'Deteccion de areas de cajeros automaticos','memo_id'=>1]);
    }
}
