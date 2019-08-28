<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsuarioTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            
            //$table->Increments('id');
            $table->unsignedInteger('id');
            $table->foreign('id')
      ->references('id')->on('personas')
      ->onDelete('restrict')->onUpdate('restrict');
            
            $table->string('user_name')->unique();
            $table->string('password');
            $table->boolean('condicion')->default(1);

            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
