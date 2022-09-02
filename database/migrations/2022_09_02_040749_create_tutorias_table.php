<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorias', function (Blueprint $table) {
            $table->id('idTutorias');
            $table->string('alumno');
            $table->unsignedBigInteger('idProfesor');
            $table->unsignedBigInteger('idDia');
            $table->string('hora');
            $table->text('asunto');
            // relaciones---------->
            $table->foreign('idProfesor')->references('id')->on('profesores')->onDelete('cascade');
            $table->foreign('idDia')->references('id')->on('diashabiles')->onDelete('cascade');

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
        Schema::dropIfExists('tutorias');
    }
}
