<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('detalle');
            $table->unsignedBigInteger('policeplan_id');
            $table->foreign('policeplan_id')->references('id')->on('policeplans');
            $table->unsignedBigInteger('tipomemo_id');
            $table->foreign('tipomemo_id')->references('id')->on('tipomemos');
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
        Schema::dropIfExists('detalles');
    }
}
