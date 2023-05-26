<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('id_ingresos');
            $table->string('origen');
            $table->date('fecha');
            $table->time('hora');

            $table->unsignedBigInteger('id_carga');
            $table->foreign('id_carga')->references('id_carga')->on('cargas');

            $table->unsignedBigInteger('id_matricula');
            $table->foreign('id_matricula')->references('id_matricula')->on('camions');

            $table->unsignedBigInteger('id_transportista');
            $table->foreign('id_transportista')->references('id_transportista')->on('transportista');

            $table->unsignedBigInteger('id_piloto');
            $table->foreign('id_piloto')->references('id_piloto')->on('pilotos');

            $table->unsignedBigInteger('id_predio');
            $table->foreign('id_predio')->references('id_predio')->on('predios');

            $table->unsignedBigInteger('id_bodega');
            $table->foreign('id_bodega')->references('id_bodega')->on('bodegas');

            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('users');

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
        Schema::dropIfExists('ingresos');
    }
}
