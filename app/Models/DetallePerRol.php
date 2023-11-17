<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallePerRol
 *
 * @property $id_permiso
 * @property $id_rol
 * @property $Estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property PermisoCat $permisoCat
 * @property RolCat $rolCat
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallePerRol extends Model
{
    
    static $rules = [
		'id_permiso' => 'required',
		'id_rol' => 'required',
		'Estatus' => 'required',
    ];

    protected $table= 'detalle_per_rol';


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_permiso','id_rol','Estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function permisoCat()
    {
        return $this->hasOne('App\Models\PermisoCat', 'id_permiso', 'id_permiso');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rolCat()
    {
        return $this->hasOne('App\Models\RolCat', 'id_rol', 'id_rol');
    }
    

}
