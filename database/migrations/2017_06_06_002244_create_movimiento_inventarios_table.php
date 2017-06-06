<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('producto')->unsigned();
            $table->integer('cantidadAnterior');
            $table->integer('cantidadNueva');
            $table->date('fechaActualizacion');
            $table->timestamps();

            $table->foreign('producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimiento_inventarios');
    }
}
