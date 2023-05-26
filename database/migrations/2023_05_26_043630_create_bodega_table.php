<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodega', function (Blueprint $table) {
            $table->id('id_bodega');
            $table->string('bodega');
            $table->unsignedBigInteger('id_predio');
            $table->foreign('id_predio')->references('id_predio')->on('predio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bodega');
    }
}
