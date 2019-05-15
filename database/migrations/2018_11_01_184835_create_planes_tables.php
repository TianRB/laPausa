<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesTables extends Migration
{
      /**
      * Run the migrations.
      *
      * @return void
      */
      public function up()
      {
            Schema::create('tipos_de_precios', function (Blueprint $table) {
                  $table->increments('id');
                  $table->string('name');
                  $table->string('display_name');
                  $table->string('description');
                  $table->string('descripcion')->nullable();
                  $table->string('nombre_pantalla')->nullable();
                  $table->timestamps();
            });
            
            Schema::create('planes', function (Blueprint $table) {
                  $table->increments('id');
                  $table->string('nombre')->nullable();
                  $table->date('fecha_inicio');
                  $table->date('fecha_fin');
                  $table->float('total_ventas');
                  $table->float('subtotal_por_semana');
                  $table->float('total_ventas_periodo_anterior');
                  $table->float('total_anual_proyectado');
                  $table->timestamps();
            });
            
            Schema::create('cultivo_planes', function (Blueprint $table) {
                  $table->increments('id');
                  $table->integer('cultivo_id')->unsigned();
                  $table->integer('plan_id')->unsigned()->nullable();
                  $table->integer('tipo_de_precio_id')->unsigned();
                  $table->string('cantidad_proyectada_por_cosecha')->nullable();
                  $table->string('cantidad_proyectada_por_semana')->nullable();
                  $table->json('fechas_de_siembra')->nullable();
                  $table->string('unidad_de_medida');
                  $table->float('ingreso_proyectado_anual')->nullable();
                  $table->float('ingreso_proyectado_por_cosecha')->nullable();
                  $table->float('ingreso_proyectado_por_semana')->nullable();
                  $table->string('cantidad_por_cosecha')->nullable();
                  $table->string('cantidad_por_semana')->nullable();
                  $table->string('cantidad_venta_proyectada')->nullable();
                  $table->string('cantidad_proyectada_por_cosecha_periodo_anterior')->nullable();
                  $table->string('cantidad_proyectada_por_semana_periodo_anterior')->nullable();
                  $table->string('cantidad_venta_periodo_anterior')->nullable();
                  $table->integer('metros_lineales_necesarios')->nullable();
                  $table->integer('frascos_por_siembra')->nullable();
                  $table->integer('cajas_petri_por_siembra')->nullable();
                  //Llaves foráneas
                  $table->foreign('cultivo_id')->references('id')->on('cultivos')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('plan_id')->references('id')->on('planes')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('tipo_de_precio_id')->references('id')
                  ->on('tipos_de_precios')->onUpdate('cascade')->onDelete('cascade');
                  
                  $table->timestamps();
            });
            
            Schema::create('siembras_hongos', function (Blueprint $table) {
                  $table->increments('id');
                  $table->integer('cultivo_id')->unsigned();
                  $table->date('fecha_prevista_siembra')->nullable();
                  $table->integer('numero_de_bloques_previsto')->nullable();
                  $table->integer('numero_de_frascos_previsto')->nullable();
                  $table->integer('numero_de_cajas_petri_necesarias')->nullable();
                  $table->integer('cantidad_semillas_necesaria')->nullable();
                  $table->date('fecha_real_siembra')->nullable();
                  $table->integer('trabajador_semilla_id')->unsigned();
                  $table->date('fecha_siembra_f1')->nullable();
                  $table->string('contaminaciones')->nullable();
                  $table->date('fecha_siembra_f2')->nullable();
                  $table->string('numero_f2')->nullable();
                  $table->string('contaminaciones_f2')->nullable();
                  $table->integer('numero_total_frascos')->nullable();
                  $table->longText('notas_semillas')->nullable();
                  $table->integer('area_semilla_id')->unsigned();
                  //Siembra en bloques
                  $table->integer('area_bloques_id')->unsigned();
                  $table->integer('trabajador_bloque_id')->unsigned();
                  $table->longText('fechas_siembra_bloque')->nullable();
                  $table->integer('numero_frascos')->nullable();
                  $table->integer('bloques_sembrados')->nullable();
                  $table->date('fecha_invasion')->nullable();
                  $table->integer('bloques_invadidos')->nullable();
                  $table->date('fecha_termino')->nullable();
                  $table->string('tipo_de_termino')->nullable();
                  $table->longText('notas_bloque')->nullable();
                  //Llaves foráneas
                  $table->foreign('cultivo_id')->references('id')->on('cultivos')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('trabajador_semilla_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('trabajador_bloque_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('area_semilla_id')->references('id')->on('areas')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('area_bloques_id')->references('id')->on('areas')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->timestamps();
            });
            
            
            Schema::create('siembras_germinados', function (Blueprint $table) {
                  $table->increments('id');
                  $table->integer('cultivo_id')->unsigned()->nullable();
                  $table->integer('trabajador_id')->unsigned()->nullable();
                  $table->date('fecha_prevista_siembra')->nullable();
                  $table->string('tipo_charola_prevista')->nullable();
                  $table->integer('cantidad_charolas_prevista')->nullable();
                  $table->string('densidad_siembra_prevista')->nullable();
                  $table->string('cantidad_semilla_prevista')->nullable();
                  $table->date('fecha_real_siembra')->nullable();
                  $table->integer('area_id')->unsigned()->nullable();
                  $table->string('tipo_charola')->nullable();
                  $table->integer('cantidad_charolas')->nullable();
                  $table->string('densidad_siembra')->nullable();
                  $table->string('cantidad_semilla')->nullable();
                  $table->longText('registro_cancelacion_siembras')->nullable();
                  $table->longText('notas')->nullable();
                  //Llaves foráneas
                  $table->foreign('cultivo_id')->references('id')->on('cultivos')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('trabajador_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('area_id')->references('id')->on('areas')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->timestamps();
            });
            
            Schema::create('siembras_cereales', function (Blueprint $table) {
                  $table->increments('id');
                  $table->integer('cultivo_id')->unsigned()->nullable();
                  $table->integer('trabajador_id')->unsigned()->nullable();
                  $table->integer('hectareas_siembra_prevista')->nullable();
                  $table->string('densidad_siembra_prevista')->nullable();
                  $table->string('cantidad_semilla_prevista')->nullable();
                  $table->integer('area_id')->unsigned()->nullable();
                  $table->string('tipo_charola')->nullable();
                  $table->integer('hectareas_siembra')->nullable();
                  $table->string('densidad_siembra')->nullable();
                  $table->string('cantidad_semilla')->nullable();
                  $table->longText('registro_cancelacion_siembras')->nullable();
                  $table->longText('notas')->nullable();
                  //Llaves foráneas
                  $table->foreign('cultivo_id')->references('id')->on('cultivos')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('trabajador_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('area_id')->references('id')->on('areas')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->timestamps();
            });
            
            Schema::create('siembras_plantulas', function (Blueprint $table) {
                  $table->increments('id');
                  $table->integer('cultivo_id')->unsigned()->nullable();
                  $table->integer('trabajador_id')->unsigned()->nullable();
                  $table->integer('plantas_prevista')->nullable();
                  $table->string('tipo_charola_prevista')->nullable();
                  $table->integer('cantidad_charola_prevista')->nullable();
                  $table->string('cantidad_semilla_prevista')->nullable();
                  $table->longText('biocamas_metros_prevista')->nullable();
                  $table->integer('area_id')->unsigned()->nullable();
                  $table->string('tipo_charola')->nullable();
                  $table->integer('cantidad_charola')->nullable();
                  $table->string('densidad_siembra')->nullable();
                  $table->string('cantidad_semilla')->nullable();
                  $table->string('registro_cuarentena')->nullable();
                  $table->longText('registro_cancelacion_siembras')->nullable();
                  $table->longText('notas')->nullable();
                  //transplantes o siembras directas
                  $table->boolean('es_directa')->nullable();
                  $table->date('fecha_prevista')->nullable();
                  $table->integer('cultivo_asociacion_id')->unsigned()->nullable();
                  $table->date('fecha_siembra_asociacion')->nullable();
                  $table->string('distancia_siembra_prevista')->nullable();
                  $table->integer('hileras_prevista')->nullable();
                  //Datos reales
                  $table->date('fecha_real')->nullable();
                  $table->string('distancia_siembra')->nullable();
                  $table->integer('hileras')->nullable();
                  $table->integer('plantas_transplantadas')->nullable();
                  $table->integer('plantas_sustituidas')->nullable();
                  $table->integer('plantas_sobrantes')->nullable();
                  $table->date('fecha_cosecha')->nullable();
                  $table->string('tipo_de_termino')->nullable();
                  $table->longText('notas_real')->nullable();
                  
                  //Llaves foráneas
                  $table->foreign('cultivo_id')->references('id')->on('cultivos')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('cultivo_asociacion_id')->references('id')->on('cultivos')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('trabajador_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
                  
                  $table->timestamps();
            });
            
            Schema::create('biocama_siembra_plantula', function (Blueprint $table) {
                  $table->integer('siembra_plantula_id')->unsigned();
                  $table->integer('biocama_id')->unsigned();
                  $table->integer('metros_lineales')->nullable();
                  
                  $table->foreign('siembra_plantula_id')->references('id')->on('siembras_plantulas')
                  ->onUpdate('cascade')->onDelete('cascade');
                  $table->foreign('biocama_id')->references('id')->on('biocamas')
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
            Schema::disableForeignKeyConstraints(); // Elimina constrains para que no se queje
            Schema::dropIfExists('biocama_siembra_plantula');
            Schema::dropIfExists('tipos_de_precios');
            Schema::dropIfExists('planes');
            Schema::dropIfExists('cultivo_planes');
            Schema::dropIfExists('siembras_hongos');
            Schema::dropIfExists('siembras_germinados');
            Schema::dropIfExists('siembras_cereales');
            Schema::dropIfExists('siembras_plantulas');
            Schema::enableForeignKeyConstraints();
      }
}
