<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalesAndRelatedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_animales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('especie');
            $table->string('raza');
            $table->string('nombre_cientifico');
            $table->string('nombre_comercial');
            $table->string('dias_gestacion');
            $table->string('ciclo_celo');
            $table->string('dias_lactacion');
            $table->string('alimentacion');
            $table->string('productos');
            $table->timestamps();
        });
        Schema::create('animales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('animal_id')->unsigned();
            $table->integer('trabajador_id')->unsigned();
            $table->string('nombre');
            $table->string('sexo');
            $table->string('fecha_nac');
            $table->string('padres');
            $table->string('fecha_alta');
            $table->string('fecha_baja');
            $table->string('tiempo_consumido');
            $table->string('peso');
            $table->string('racion_alimento');
            $table->string('unidad_medida');
            $table->string('costo');
            $table->string('preventivos');
            $table->json('enfermedades');
            $table->string('vacunas');
            $table->string('notas');
            $table->timestamps();

						$table->foreign('animal_id')->references('id')->on('catalogo_animales')
								->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('trabajador_id')->references('id')->on('users')
								->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animales');
				Schema::dropIfExists('catalogo_animales');
    }
}
