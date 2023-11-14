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
        Schema::create('usuario_detalles', function (Blueprint $table) {
            $table->engine='InnoDB'; // Esto permite la eliminación de datos en cascada
            $table->unsignedBigInteger('id_usuario'); // Llave foránea a la tabla Usuario
            $table->string('Nombre');
            $table->string('ApPaterno');
            $table->string('ApMaterno');
            $table->string('Domicilio');
            $table->bigInteger('Telefono')->unique();
            $table->string('Correo')->unique(); // Campo único para MySQL

            // Definir la restricción de clave foránea
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_detalles');
    }
};
