<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearAnuncioTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('anuncios', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('nombre',100);
            $table->string('descripcion',255);
            $table->string('slug', 128)->unique();
            $table->string('file',128)->nullable();
            $table->string('inicio_vigencia',128)->nullable();
            $table->string('fin_vigencia',128)->nullable();
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
        Schema::dropIfExists('anuncios');
    }
}
