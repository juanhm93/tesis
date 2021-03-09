<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->id();
            $table->string('monto');
            $table->integer('ejecucion_id')->unsigned();
            $table->integer('moneda_id')->unsigned();
            $table->integer('prohab_id')->unsigned();
            $table->integer('direccion_id')->unsigned();
            $table->timestamps();
            // $table->foreign('ejecucion_id')-> references('id')->on('ejecucions');
            // $table->foreign('moneda_id')-> references('id')->on('monedas');
            // $table->foreign('prohab_id')-> references('id')->on('prohabs');
            // $table->foreign('direcion_id')-> references('id')->on('direcions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presupuestos');
    }
}
