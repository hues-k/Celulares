<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('Marca');
            $table->timestamps();
        });

        //aqui se esta agrgando a la tabla "celulares" la columna que sera llave foranea
        Schema::table('celulares', function(Blueprint $table){
            //unsign... es que agrege numero enteros positivos        este adi es de la tabla celulares
            $table->unsignedBigInteger('marca_id')->nullable()->after('id');
         //aqui esta dandole la llave forane  haceindo referencia al id de la tabla marcas
            $table->foreign('marca_id')->references('id')->on('marcas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
