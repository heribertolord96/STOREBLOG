<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PromocionTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocion_tags', function (Blueprint $table) {
            $table->Increments('id');
            
            $table->unsignedInteger('promocion_id')->nullable();
            $table->unsignedInteger('tag_id')->nullable();
            
            $table->timestamps();

            //relation
            $table->foreign('promocion_id')->references('id')->on('promocions');

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
        Schema::dropIfExists('promocion_tags');
    }
}
