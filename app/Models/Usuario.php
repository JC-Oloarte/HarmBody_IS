<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id_usuario
 * @property $NomUsuario
 * @property $Passw
 * @property $id_rol
 * @property $Estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property RolCat $rolCat
 * @property Rutina[] $rutinas
 * @property UsuarioDetalle[] $usuarioDetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'NomUsuario' => 'required',
		'Passw' => 'required',
		'id_rol' => 'required',
		'Estatus' => 'required',
    ];

    protected $table= 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','NomUsuario','Passw','id_rol','Estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rolCat()
    {
        return $this->hasOne('App\Models\RolCat', 'id_rol', 'id_rol');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rutinas()
    {
        return $this->hasMany('App\Models\Rutina', 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarioDetalles()
    {
        return $this->hasMany('App\Models\UsuarioDetalle', 'id_usuario', 'id_usuario');
    }
    

}
