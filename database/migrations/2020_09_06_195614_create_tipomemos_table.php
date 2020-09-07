<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipomemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipomemos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('estado')->default('MOSTRAR');
            $table->unsignedBigInteger('memo_id');
            $table->foreign('memo_id')->references('id')->on('memos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipomemos');
    }
}
