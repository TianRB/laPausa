<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCultivosAndRelatedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('especie');
            $table->string('variedad');
            $table->string('nombre_cientifico');
            $table->string('nombre_comercial');
            $table->string('veces_sembrado')->nullable();
            $table->string('temporada_optima_siembra')->nullable();
            $table->integer('dias_a_germinacion')->nullable();
            $table->integer('dias_a_trasplante')->nullable();
            $table->integer('dias_a_comienzo_cosecha')->nullable();
            $table->integer('dias_a_termino_cosecha')->nullable();
            $table->timestamp('fecha_inicio_cosecha')->nullable();
            $table->timestamp('fecha_termino_cosecha')->nullable();
            $table->string('distancia_siembra')->nullable();
            $table->string('densidad_siembra')->nullable();
            $table->string('hileras')->nullable();
            $table->string('unidad_medida_venta')->nullable();
            $table->string('unidad_medida_rendimiento')->nullable();
            $table->string('rendimiento_promedio')->nullable();
            $table->string('rendimiento_promedio_acumulado')->nullable();
            $table->string('semillas_por_gramo')->nullable();
            $table->string('calificacion_clientes')->nullable();
            $table->string('ingreso_por_metro_lineal')->nullable();
            $table->string('indice_ingreso_por_tiempo')->nullable();
            $table->string('semillas_por_saco')->nullable();
            $table->string('valor_por_hectarea')->nullable();
            $table->string('valor_por_kilogramo')->nullable();
            $table->string('ingreso_por_arbol')->nullable();
            $table->string('tipo_charola');
            $table->timestamps();
        });
        Schema::create('familias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('tipos_cultivo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('tipos_cosecha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('tipos_siembra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('cp');
            $table->timestamps();
        });
        Schema::create('enfermedades_y_plagas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('distancia_entre_arboles');
            $table->string('rango_de_edad');
            $table->integer('enfermedades_o_plagas')->unsigned();
            $table->timestamps();

						$table->foreign('enfermedades_o_plagas')->references('id')->on('enfermedades_y_plagas')
								->onUpdate('cascade')->onDelete('cascade');
        });



############################################################################################



				Schema::create('cultivo_familia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('familia_id')->unsigned();
            $table->integer('cultivo_id')->unsigned();

						$table->foreign('familia_id')->references('id')->on('familias')
                ->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('cultivo_id')->references('id')->on('cultivos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
				Schema::create('cultivo_tipo_cultivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_cultivo_id')->unsigned();
            $table->integer('cultivo_id')->unsigned();

						$table->foreign('tipo_cultivo_id')->references('id')->on('tipos_cultivo')
                ->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('cultivo_id')->references('id')->on('cultivos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
				Schema::create('cultivo_tipo_cosecha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_cosecha_id')->unsigned();
            $table->integer('cultivo_id')->unsigned();

						$table->foreign('tipo_cosecha_id')->references('id')->on('tipos_cosecha')
                ->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('cultivo_id')->references('id')->on('cultivos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
				Schema::create('cultivo_tipo_siembra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_siembra_id')->unsigned();
            $table->integer('cultivo_id')->unsigned();

						$table->foreign('tipo_siembra_id')->references('id')->on('tipos_siembra')
                ->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('cultivo_id')->references('id')->on('cultivos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
				Schema::create('cultivo_proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proveedor_id')->unsigned();
            $table->integer('cultivo_id')->unsigned();

						$table->foreign('proveedor_id')->references('id')->on('proveedores')
                ->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('cultivo_id')->references('id')->on('cultivos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
				Schema::create('cultivo_grupo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->integer('cultivo_id')->unsigned();

						$table->foreign('grupo_id')->references('id')->on('grupos')
                ->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('cultivo_id')->references('id')->on('cultivos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
				Schema::create('cultivo_resistencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enfermedad_o_plaga_id')->unsigned();
            $table->integer('cultivo_id')->unsigned();
            $table->string('resistencia_a_enfermedad_o_plaga');
            $table->string('suceptibilidad_a_enfermedad_o_plaga');
            $table->string('suceptibilidad_a_enfermedad_o_plaga_acumulada');

						$table->foreign('enfermedad_o_plaga_id')->references('id')->on('enfermedades_y_plagas')
                ->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('cultivo_id')->references('id')->on('cultivos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
				Schema::create('cultivo_enfermedad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enfermedad_o_plaga_id')->unsigned();
            $table->integer('cultivo_id')->unsigned();

						$table->foreign('enfermedad_o_plaga_id')->references('id')->on('enfermedades_y_plagas')
                ->onUpdate('cascade')->onDelete('cascade');
						$table->foreign('cultivo_id')->references('id')->on('cultivos')
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
        Schema::dropIfExists('cultivo_familia');
        Schema::dropIfExists('cultivo_tipo_cultivo');
        Schema::dropIfExists('cultivo_tipo_cosecha');
        Schema::dropIfExists('cultivo_proveedor');
        Schema::dropIfExists('cultivo_grupo');
        Schema::dropIfExists('cultivo_resistencia');
        Schema::dropIfExists('cultivo_enfermedad');

				Schema::dropIfExists('cultivos');
				Schema::dropIfExists('familias');
				Schema::dropIfExists('proveedores');
				Schema::dropIfExists('enfermedades_y_plagas');
				Schema::dropIfExists('tipos_cultivo');
				Schema::dropIfExists('tipos_cosecha');
				Schema::dropIfExists('grupos');
    }
}
