<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventoTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_tags', function (Blueprint $table) {
            $table->Increments('id');
            
            $table->unsignedInteger('evento_id')->nullable();
            $table->unsignedInteger('tag_id')->nullable();
            
            $table->timestamps();

            //relation
            $table->foreign('evento_id')->references('id')->on('eventos');

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
        Schema::dropIfExists('evento_tags');
    }
}
