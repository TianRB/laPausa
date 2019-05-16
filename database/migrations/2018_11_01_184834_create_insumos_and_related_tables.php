<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosAndRelatedTables extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('catalogo_insumos', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('display_name');
      $table->string('description')->nullable();
      $table->string('unidad_medida');
      $table->string('procedimientos');
      $table->json('datos');
      $table->decimal('costo',10,2);
      $table->timestamps();
    });
    Schema::create('provision_insumos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('area_id')->unsigned();
      $table->integer('insumo_id')->unsigned();
      $table->integer('trabajador_id')->unsigned();
      $table->date('fecha');
      $table->integer('cantidad');
      $table->string('unidad_medida');
      $table->integer('area_destino_id')->unsigned();
      $table->string('notas');
      $table->timestamps();
      
      $table->foreign('area_id')->references('id')->on('areas')
      ->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('insumo_id')->references('id')->on('catalogo_insumos')
      ->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('trabajador_id')->references('id')->on('trabajadores')
      ->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('area_destino_id')->references('id')->on('areas')
      ->onUpdate('cascade')->onDelete('cascade');
    });
    Schema::create('registro_procedimientos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('area_id')->unsigned();
      $table->integer('insumo_id')->unsigned();
      $table->integer('trabajador_id')->unsigned();
      $table->string('procedimientos');
      $table->date('fecha');
      $table->string('tiempo_consumido');
      $table->string('notas');
      $table->timestamps();
      
      $table->foreign('area_id')->references('id')->on('areas')
      ->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('insumo_id')->references('id')->on('catalogo_insumos')
      ->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('trabajador_id')->references('id')->on('trabajadores')
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
    Schema::dropIfExists('catalogo_insumos');
    Schema::dropIfExists('provision_insumos');
    Schema::dropIfExists('registro_procedimientos');
    Schema::enableForeignKeyConstraints(); // Activa constrains para que no se queje
  }
}
