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
        Schema::create('rol_cat', function (Blueprint $table) {
            $table->engine='InnoDB'; // Esto permite la eliminación de datos en cascada
            $table->id('id_rol'); // Definimos la llave primaria como id_rol
            $table->string('Nombre'); // Atributo de tipo string
            $table->date('Fecha_de_alta'); // Atributo de tipo Date
            $table->tinyInteger('Estatus')->default(0); // Atributo de tipo TINYINT con valor predeterminado 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_cat');
    }
};
