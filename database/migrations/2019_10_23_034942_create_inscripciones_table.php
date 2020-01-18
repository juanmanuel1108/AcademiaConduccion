<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('registros_id');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('documento',10);
            $table->string('direccion',100);
            $table->string('telefono',10);
            $table->string('email',100);
            $table->string('curso',100);
            $table->string('foto',255);
            $table->string('foto_url',255);
            $table->foreign('registros_id')->references('id')->on('registros');
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
        Schema::dropIfExists('inscripciones');
    }
}
