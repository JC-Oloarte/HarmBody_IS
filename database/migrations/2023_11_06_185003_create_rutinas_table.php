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
        Schema::create('rutinas', function (Blueprint $table) {
            $table->engine='InnoDB'; // Esto permite la eliminación de datos en cascada
            $table->id('id_rutina'); // Llave primaria autoincrementable
            $table->string('Nombre');
            $table->tinyInteger('Estatus')->default(0); // Campo TINYINT con valor predeterminado 0
            $table->unsignedBigInteger('id_paciente'); // Llave foránea a la tabla pacientes
            $table->string('Descripcion');
            $table->unsignedBigInteger('id_usuario'); // Llave foránea a la tabla usuarios
            $table->date('Fecha_Rutina'); // Campo de tipo DATE para la fecha de la rutina

            // Definir las restricciones de clave foránea
            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutinas');
    }
};
