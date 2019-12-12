<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_proyecto', function (Blueprint $table) {
           /* $table->bigIncrements('id');
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->timestamps();*/

            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
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
        Schema::dropIfExists('empleado_proyecto');
    }
}
