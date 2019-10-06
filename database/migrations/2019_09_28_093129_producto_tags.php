<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductoTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_tags', function (Blueprint $table) {
            $table->Increments('id');            
            $table->unsignedInteger('producto_id')->nullable();
            $table->unsignedInteger('tag_id')->nullable();            
            $table->timestamps();
            //relation
            $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::dropIfExists('producto_tags');
    }
}
