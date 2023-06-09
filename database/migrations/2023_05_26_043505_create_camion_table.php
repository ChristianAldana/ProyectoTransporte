<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {

            $table->string('matricula')->primary();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('capacidad');
            $table->unsignedBigInteger('id_transportista')->nullable();
            $table->foreign('id_transportista')->references('id_transportista')->on('transportista')->onDelete('cascade');
            $table->timestamps();

        });
    }
            public function down()
            {
                Schema::dropIfExists('camion');
            }
        }
