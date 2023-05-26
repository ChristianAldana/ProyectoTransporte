<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->id('id_ingreso')->primary();
            $table->date('fecha');
            $table->time('hora');
            $table->string('destino');
            $table->unsignedBigInteger('id_carga')->nullable();
            $table->foreign('id_carga')->references('id')->on('carga')->onDelete('no action');
            $table->unsignedBigInteger('id_transportista')->nullable();
            $table->foreign('id_transportista')->references('id')->on('transportista')->onDelete('no action');
            $table->unsignedBigInteger('id_predio')->nullable();
            $table->foreign('id_predio')->references('id')->on('predio')->onDelete('no action');
            $table->unsignedBigInteger('id_bodega')->nullable();
            $table->foreign('id_bodega')->references('id')->on('bodega')->onDelete('no action');
            $table->unsignedBigInteger('id_matricula')->nullable();
            $table->foreign('id_matricula')->references('id')->on('matricula')->onDelete('no action');
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('no action');
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
        Schema::dropIfExists('egresos');
    }
}
