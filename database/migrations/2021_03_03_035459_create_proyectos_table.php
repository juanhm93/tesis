<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('renglon');
            $table->string('titulo');
            $table->integer('categoria_id');
            $table->integer('division_id');
            $table->integer('dom_id');
            $table->integer('emx_id');
            $table->foreign('categoria_id')-> references('id')->on('categorias');
            $table->foreign('division_id')-> references('id')->on('divisions');
            $table->foreign('dom_id')-> references('id')->on('doms');
            $table->foreign('emx_id')-> references('id')->on('emxes');
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
        Schema::dropIfExists('proyectos');
    }
}
