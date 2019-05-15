<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialesAndRelatedTables extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('catalogo_materiales', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('display_name');
      $table->string('description');
      $table->string('marca');
      $table->integer('proveedor_id')->unsigned();
      $table->string('categoria');
      $table->timestamps();
      
      $table->foreign('proveedor_id')->references('id')->on('proveedores')
      ->onUpdate('cascade')->onDelete('cascade');
    });
    Schema::create('inventario_materiales', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('material_id')->unsigned();
      $table->integer('area_id')->unsigned();
      $table->integer('cantidad');
      $table->string('unidad_medida');
      $table->date('fecha_alta');
      $table->string('notificaciones');
      $table->timestamps();
      
      $table->foreign('material_id')->references('id')->on('catalogo_materiales')
      ->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('area_id')->references('id')->on('areas')
      ->onUpdate('cascade')->onDelete('cascade');
    });
    Schema::create('registro_materiales', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('material_id')->unsigned();
      $table->integer('area_id')->unsigned();
      $table->integer('trabajador_id')->unsigned();
      $table->integer('cantidad');
      $table->string('unidad_medida');
      $table->decimal('precio_total',10,2);
      $table->decimal('precio_unitario',10,2);
      $table->date('fecha_ingreso');
      $table->string('notas');
      $table->timestamps();
      
      $table->foreign('material_id')->references('id')->on('catalogo_materiales')
      ->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('area_id')->references('id')->on('areas')
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
    Schema::dropIfExists('catalogo_materiales');
    Schema::dropIfExists('inventario_materiales');
    Schema::dropIfExists('registro_materiales');
    Schema::enableForeignKeyConstraints(); // Activa constrains para que no se queje
  }
}
