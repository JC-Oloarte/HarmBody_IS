<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $num;
    public $clave;
    public $nombre_usuario;
    public $ap_Paterno;
    public $ap_Materno;
    public $domicilio;
    public $telefono;
    public $correo;
    public $rol;

    public function __construct(
        $num,
        $clave,
        $nombre_usuario,
        $ap_Paterno,
        $ap_Materno,
        $domicilio,
        $telefono,
        $correo,
        $rol
    ) {
        $this->num = $num;
        $this->clave = $clave;
        $this->nombre_usuario = $nombre_usuario;
        $this->ap_Paterno = $ap_Paterno;
        $this->ap_Materno = $ap_Materno;
        $this->domicilio = $domicilio;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->rol = $rol;
    }

    // Método para consultar un usuario por ID
    public function consulta_Usuario()
    {
        
    }

    // Método para verificar la existencia de un usuario
    public function verifica_Usuario()
    {

    }

    // Método para guardar un nuevo usuario
    public function salvar_Usuario()
    {

    }

    // Método para eliminar un usuario por ID
    public function eliminar_Usuario()
    {

    }




    use HasFactory;
}
