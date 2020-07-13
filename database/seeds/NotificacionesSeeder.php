<?php

use Illuminate\Database\Seeder;

class NotificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notificaciones')->insert(['titulo' => 'GANADOR DE EXCELENCIA','contenido'=>'Hacemoes llegar que el ganador es JOSE CANZECO','user_id'=>'1','tipo_id'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
    }
}
