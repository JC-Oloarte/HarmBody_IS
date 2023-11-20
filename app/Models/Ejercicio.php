<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ejercicio
 *
 * @property $id_ejercicio
 * @property $Nombre
 * @property $Descripcion
 * @property $Estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleRutina[] $detalleRutinas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ejercicio extends Model
{
    
    static $rules = [
		'id_ejercicio' => 'required',
		'Nombre' => 'required',
		'Descripcion' => 'required',
		'Estatus' => 'required',
    ];

    protected $table= 'ejercicios';
    protected $primaryKey = 'id_ejercicio';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ejercicio','Nombre','Descripcion','Estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleRutinas()
    {
        return $this->hasMany('App\Models\DetalleRutina', 'id_ejercicio', 'id_ejercicio');
    }
    

}
