<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memos')->insert(['nombre'=>'TRATA Y TRAFICO DE PERSONAS','abreviado'=>'TRATA Y TRAF PERSONAS']);
        DB::table('memos')->insert(['nombre'=>'SEGUIMIENTO BANCARIO','abreviado'=>'TRATA Y TRAF PERSONAS']);
//        DB::table('memos')->insert(['nombre'=>'TRATA Y TRAFICO DE PERSONAS','abreviado'=>'TRATA Y TRAF PERSONAS']);
//        DB::table('memos')->insert(['nombre'=>'TRATA Y TRAFICO DE PERSONAS','abreviado'=>'TRATA Y TRAF PERSONAS']);
    }
}
