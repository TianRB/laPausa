<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerramientasAndRelatedTables extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('catalogo_herramientas_y_maquinaria', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('display_name');
			$table->string('description');
			$table->string('tipo'); // Maquinaria | Herramienta
			$table->string('marca');
			$table->string('modelo');
			$table->json('datos');
			$table->timestamps();
		});
		Schema::create('herramientas_y_maquinaria', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('herramienta_id')->unsigned();
			$table->integer('area_id')->unsigned(); // Maquinaria | Herramienta
			$table->integer('trabajador_id')->unsigned(); // Maquinaria | Herramienta
			$table->string('cantidad');
			$table->string('unidad_de_medida');
			$table->timestamp('fecha_alta')->nullable();
			$table->timestamp('fecha_baja')->nullable();
			$table->string('notas');
			$table->timestamps();
			
			$table->foreign('herramienta_id')->references('id')->on('catalogo_herramientas_y_maquinaria')
			->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('area_id')->references('id')->on('areas')
			->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('trabajador_id')->references('id')->on('users')
			->onUpdate('cascade')->onDelete('cascade');
			
		});
		Schema::create('registro_combustible', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('herramienta_id')->unsigned();
			$table->integer('trabajador_id')->unsigned();
			$table->string('litros_cargados');
			$table->string('costo_litro');
			$table->string('odometro_u_horas');
			$table->timestamp('fecha');
			$table->string('notas');
			$table->timestamps();
			
			$table->foreign('herramienta_id')->references('id')->on('catalogo_herramientas_y_maquinaria')
			->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('trabajador_id')->references('id')->on('users')
			->onUpdate('cascade')->onDelete('cascade');
			
		});
		Schema::create('mantenimiento_y_reparaciones', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('herramienta_id')->unsigned();
			$table->integer('trabajador_id')->unsigned(); // Maquinaria | Herramienta
			$table->string('mantenimiento_o_reparacion');
			$table->string('descripcion_mantenimiento_o_reparacion');
			$table->string('costo_total');
			$table->timestamp('fecha');
			$table->string('notas');
			$table->timestamps();
			
			$table->foreign('herramienta_id')->references('id')->on('catalogo_herramientas_y_maquinaria')
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
		Schema::disableForeignKeyConstraints(); // Elimina constrains para que no se queje
		Schema::dropIfExists('herramientas_y_maquinaria');
		Schema::dropIfExists('registro_combustible');
		Schema::dropIfExists('catalogo_herramientas_y_maquinaria');
		Schema::dropIfExists('mantenimiento_y_reparaciones');
		Schema::enableForeignKeyConstraints(); // Activa constrains para que no se queje
		
		
	}
}
