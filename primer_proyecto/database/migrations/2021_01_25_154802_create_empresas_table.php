<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cif');
            $table->string('direccion');
            $table->string('poblacion');
            $table->char('cp', 5);
            $table->char('telefono1', 9);
            $table->char('telefono2', 9);
            $table->char('fax', 9);
            $table->string('correo')->unique();
            $table->set('sectorProductivo', ['Primario', 'Secundario', 'Terciari']);
            $table->string('actividadPrincipal');
            $table->set('titularidad', ['Privada', 'Publica']);
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
        Schema::dropIfExists('empresas');
    }
}
