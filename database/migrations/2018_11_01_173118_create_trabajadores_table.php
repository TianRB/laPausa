<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias');
            $table->integer('user_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_nacimiento');
            $table->string('rfc');
            $table->string('curp');
            $table->string('seguro_social');
            $table->string('calle');
            $table->string('poblacion');
            $table->string('telefono');
            $table->string('celular');
            $table->string('telefono_emergencia');
            $table->string('parentesco_telefono_emergencia');
            $table->date('fecha_ingreso');
            $table->decimal('sueldo_base',10,2);
            $table->string('prestaciones');
            $table->string('vacaciones');
            $table->string('bonos');
            $table->timestamps();

						$table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('trabajadores');
			Schema::enableForeignKeyConstraints(); // Activa constrains para que no se queje
    }
}
