<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('estado',array('ACTIVO','INACTIVO'))->default('ACTIVO');
            $table->enum('tipo',array('POLICIA','GERENTE','ADMINISTRADOR'))->default('ADMINISTRADOR')->nullable();
            $table->unsignedBigInteger('subcategoria_id')->nullable();
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
