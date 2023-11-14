<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_rutinas', function (Blueprint $table) {
            $table->engine='InnoDB'; // Esto permite la eliminación de datos en cascada
            $table->id('id_rutina_det'); // Llave primaria autoincrementable
            $table->unsignedBigInteger('id_rutina'); // Llave foránea a la tabla rutinas
            $table->unsignedBigInteger('id_ejercicio'); // Llave foránea a la tabla ejercicios
            $table->tinyInteger('Series'); // Campo de tipo TINYINT para el número de series
            $table->tinyInteger('Repeticiones'); // Campo de tipo TINYINT para el número de repeticiones
            $table->tinyInteger('Estatus')->default(0); // Campo TINYINT con valor predeterminado 0

            // Definir las restricciones de clave foránea
            $table->foreign('id_rutina')->references('id_rutina')->on('rutinas');
            $table->foreign('id_ejercicio')->references('id_ejercicio')->on('ejercicios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_rutinas');
    }
};
