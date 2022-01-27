<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_materia')->nullable();
            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('id_estudiante')->nullable();
            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('set null')->onUpdate('cascade');
           
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
        Schema::dropIfExists('materia_estudiantes');
    }
}
