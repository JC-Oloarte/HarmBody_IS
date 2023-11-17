<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioDetalle
 *
 * @property $id_usuario
 * @property $Nombre
 * @property $ApPaterno
 * @property $ApMaterno
 * @property $Domicilio
 * @property $Telefono
 * @property $Correo
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsuarioDetalle extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'Nombre' => 'required',
		'ApPaterno' => 'required',
		'ApMaterno' => 'required',
		'Domicilio' => 'required',
		'Telefono' => 'required',
		'Correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','Nombre','ApPaterno','ApMaterno','Domicilio','Telefono','Correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id_usuario', 'id_usuario');
    }
    

}
