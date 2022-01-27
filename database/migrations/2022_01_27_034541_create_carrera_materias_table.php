<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarreraMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera_materias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_carrera')->nullable();
            $table->foreign('id_carrera')->references('id')->on('carreras')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('id_materia')->nullable();
            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('set null')->onUpdate('cascade');
            
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
        Schema::dropIfExists('carrera_materias');
    }
}
