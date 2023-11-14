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
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->engine='InnoDB'; // Esto permite la eliminación de datos en cascada
            $table->id('id_ejercicio'); // Llave primaria autoincrementable
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->tinyInteger('Estatus')->default(0); // Campo TINYINT con valor predeterminado 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejercicios');
    }
};
