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
        Schema::create('detalle_per_rol', function (Blueprint $table) {
            $table->id('id_det_rol'); // Llave Primaria
            $table->unsignedBigInteger('id_permiso'); // Llave foránea a la tabla de permisos
            $table->unsignedBigInteger('id_rol'); // Llave foránea a la tabla de roles
            $table->tinyInteger('Estatus')->default(0); // Campo TINYINT con valor predeterminado 0
          
            // Definir las restricciones de clave foránea
            $table->foreign('id_permiso')->references('id_permiso')->on('permiso_cat');
            $table->foreign('id_rol')->references('id_rol')->on('rol_cat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__per__rols');
    }
};
