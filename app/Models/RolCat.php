<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolCat
 *
 * @property $id_rol
 * @property $Nombre
 * @property $Fecha_de_alta
 * @property $Estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property DetallePerRol[] $detallePerRols
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RolCat extends Model
{
    
    static $rules = [
		'id_rol' => 'required',
		'Nombre' => 'required',
		'Fecha_de_alta' => 'required',
		'Estatus' => 'required',
    ];
    protected $table= 'rol_cat';
    protected $primaryKey = 'id_rol';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_rol','Nombre','Fecha_de_alta','Estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePerRols()
    {
        return $this->hasMany('App\Models\DetallePerRol', 'id_rol', 'id_rol');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'id_rol', 'id_rol');
    }
    

}
