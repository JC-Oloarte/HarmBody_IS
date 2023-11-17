<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rutina
 *
 * @property $id_rutina
 * @property $Nombre
 * @property $Estatus
 * @property $id_paciente
 * @property $Descripcion
 * @property $id_usuario
 * @property $Fecha_Rutina
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleRutina[] $detalleRutinas
 * @property Paciente $paciente
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rutina extends Model
{
    
    static $rules = [
		'id_rutina' => 'required',
		'Nombre' => 'required',
		'Estatus' => 'required',
		'id_paciente' => 'required',
		'Descripcion' => 'required',
		'id_usuario' => 'required',
		'Fecha_Rutina' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_rutina','Nombre','Estatus','id_paciente','Descripcion','id_usuario','Fecha_Rutina'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleRutinas()
    {
        return $this->hasMany('App\Models\DetalleRutina', 'id_rutina', 'id_rutina');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id_Paciente', 'id_paciente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id_usuario', 'id_usuario');
    }
    

}
