<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearLocationTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->Increments('id');
            
            $table->string('calle',100);
            $table->string('numero_interior',100)->nullable();
            $table->string('numero_exterior',100)->nullable();
            $table->string('municipio',100)->nullable();
            $table->string('estado',100)->nullable();
            $table->string('pais',100)->nullable();

            $table->string('latitud',100)->nullable();
            $table->string('longitud',100)->nullable();
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
        Schema::dropIfExists('locations');
    }
}
