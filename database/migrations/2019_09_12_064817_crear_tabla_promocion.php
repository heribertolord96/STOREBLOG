<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPromocion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocions', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre', 64);
            $table->string('slug', 128)->unique();
            $table->string('descripcion', 328)->nullable();
            $table->string('fecha_inicio')->nullable();
            $table->string('fecha_fin')->nullable();
            $table->string('hora_inicio')->nullable();
            $table->string('hora_fin')->nullable();
            $table->string('file',   128)->nullable();
            $table->unsignedInteger('tienda_id')->nullable();

            $table->foreign('tienda_id')
      ->references('id')->on('tiendas')
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
        Schema::dropIfExists('promocions');
    }
}
