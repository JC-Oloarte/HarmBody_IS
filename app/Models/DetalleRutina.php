<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleRutina
 *
 * @property $id_rutina_det
 * @property $id_rutina
 * @property $id_ejercicio
 * @property $Series
 * @property $Repeticiones
 * @property $Estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Ejercicio $ejercicio
 * @property Rutina $rutina
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleRutina extends Model
{
    
    static $rules = [
		'id_rutina_det' => 'sometimes',
		'id_rutina' => 'required',
		'id_ejercicio' => 'required',
		'Series' => 'required',
		'Repeticiones' => 'required',
		'Estatus' => 'required',
    ];
    
    protected $primaryKey = 'id_rutina_det';
    protected $table= 'detalle_rutinas';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_rutina_det','id_rutina','id_ejercicio','Series','Repeticiones','Estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ejercicio()
    {
        return $this->hasOne('App\Models\Ejercicio', 'id_ejercicio', 'id_ejercicio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rutina()
    {
        return $this->hasOne('App\Models\Rutina', 'id_rutina', 'id_rutina');
    }
    

}
