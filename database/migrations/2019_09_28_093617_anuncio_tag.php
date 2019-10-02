<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnuncioTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncio_tags', function (Blueprint $table) {
            $table->Increments('id');
            
            $table->unsignedInteger('anuncio_id')->nullable();
            $table->unsignedInteger('tag_id')->nullable();
            
            $table->timestamps();

            //relation
            $table->foreign('anuncio_id')->references('id')->on('anuncios');

            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuncio_tags');
    }
}
