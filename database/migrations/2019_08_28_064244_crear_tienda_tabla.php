<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTiendaTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',100);
            $table->string('slug', 128)->unique();
            $table->text('descripcion',500);
            $table->time('hora_apertura')->nullable();
            $table->time('hora_cierre')->nullable();
            $table->string('num_telefono',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('file', 128)->nullable();
            $table->unsignedInteger('ubicacion_id')->nullable();
            $table->foreign('ubicacion_id')
      ->references('id')->on('locations')
      ->onDelete('restrict')->onUpdate('restrict');

      

      $table->timestamps();
      $table->charset='utf8mb4';
      $table->collation='utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendas');
    }
}
