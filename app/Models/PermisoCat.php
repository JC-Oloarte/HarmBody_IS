<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PermisoCat
 *
 * @property $id_permiso
 * @property $Nombre
 * @property $Fecha_de_alta
 * @property $Estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property DetallePerRol[] $detallePerRols
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PermisoCat extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Estatus' => 'required',
    ];

    protected $primaryKey = 'id_permiso';
    protected $table= 'permiso_cat';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_permiso','Nombre','Fecha_de_alta','Estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePerRols()
    {
        return $this->hasMany('App\Models\DetallePerRol', 'id_permiso', 'id_permiso');
    }

    public function getPermisos()
    {
      
    }
    

}
