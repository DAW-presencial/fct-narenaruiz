<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosDeTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_de_trabajo', function (Blueprint $table) {
            $table->id();
            $table->string('nombreDelCentro');
            $table->string('direccion');
            $table->string('poblacion');
            $table->char('cp', 5);
            $table->string('actividad');
            $table->unsignedinteger('numeroTrabajadores');
            $table->string('correo')->unique();
            $table->char('telefono1', 9);
            $table->char('telefono2', 9);
            $table->set('tipoJornada', ['Continuada', 'Partida']);
            $table->time('horario', $precision = 0);
            $table->string("cordinadorFCT");
            $table->string("cordinadorNIF");
            $table->string("nombreTutorEmp");
            $table->string("tutorEmpNIF");
            $table->string("lugarDeTrabajo");
            $table->unsignedBigInteger('empresas_id')->unique();
            $table->unsignedBigInteger('tutores_id');
            $table->foreign('empresas_id')->references('id')->on('empresas');
            $table->foreign('tutores_id')->references('id')->on('tutores');
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
        Schema::dropIfExists('centros_de_trabajo');
    }
}
