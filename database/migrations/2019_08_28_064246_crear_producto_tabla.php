<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearProductoTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',100);
            $table->string('descripcion',100);
            $table->string('imagen',100);
            $table->string('presentacion',100);
            $table->string('precio',100);

            $table->unsignedInteger('categoria_id');
            $table->unsignedInteger('departamento_id');
            $table->unsignedInteger('tienda_id');

            $table->foreign('categoria_id')
      ->references('id')->on('categorias')
      ->onDelete('restrict')->onUpdate('restrict');

      $table->foreign('departamento_id')
      ->references('id')->on('departamentos')
      ->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
      $table->charset='utf8mb4';
      $table->collation='utf8mb4_spanish_ci';
            $table->foreign('tienda_id')
      ->references('id')->on('tiendas')
      ->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
