<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechaNacimiento');
            $table->string('direccion');
            $table->string('estadoCivil');
            $table->char('sexo');
            $table->date('fechaIngreso');
            $table->integer('descuento');
            $table->timestamps();

            $table->primary('cedula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
