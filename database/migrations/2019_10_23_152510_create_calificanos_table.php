<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificanos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('registros_id');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('telefono',10);
            $table->string('calificacion',2);
            $table->string('opinion',500);
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
        Schema::dropIfExists('calificanos');
    }
}
