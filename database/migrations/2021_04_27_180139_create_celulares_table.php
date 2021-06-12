<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celulares', function (Blueprint $table) {
            $table->id();
            $table->string('Modelo');
            $table->integer('Precio');
            $table->integer('Almacenamiento');
            $table->integer('Ram');
            $table->integer('Expandible');
            $table->float('Pantalla');
            $table->float('Resolucion');
            $table->string('Bateria');
            $table->string('Procesador');
            $table->integer('Nucleos');
            $table->integer('Camaras');
            $table->string('SO');
            $table->string('Colores');
            $table->string('Foto');
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
        Schema::dropIfExists('celulares');
    }
}
