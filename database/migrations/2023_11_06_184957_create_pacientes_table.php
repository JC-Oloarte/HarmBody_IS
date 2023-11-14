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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->engine='InnoDB'; // Esto permite la eliminación de datos en cascada
            $table->id('id_Paciente');
            $table->string('Nombre');
            $table->string('Ap_Paterno');
            $table->string('Ap_Materno');
            $table->string('Domicilio');
            $table->bigInteger('Telefono')->unique();
            $table->string('Correo_Electronico')->unique(); // Campo único para MySQL
            $table->date('Fecha_Nac'); // Campo de tipo DATE para la fecha de nacimiento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
