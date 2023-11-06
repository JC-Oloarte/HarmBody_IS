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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine='InnoDB'; // Esto permite la eliminación de datos en cascada
            $table->id('id_usuario'); // Llave primaria autoincrementable
            $table->string('NomUsuario');
            $table->string('Passw');
            $table->unsignedBigInteger('id_rol'); // Llave foránea a la tabla Rol_Cat
            $table->tinyInteger('Estatus')->default(0); // Campo TINYINT con valor predeterminado 0

            // Definir la restricción de clave foránea
            $table->foreign('id_rol')->references('id_rol')->on('rol_cat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
