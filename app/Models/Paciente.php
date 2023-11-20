<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id_Paciente
 * @property $Nombre
 * @property $Ap_Paterno
 * @property $Ap_Materno
 * @property $Domicilio
 * @property $Telefono
 * @property $Correo_Electronico
 * @property $Fecha_Nac
 * @property $created_at
 * @property $updated_at
 *
 * @property Rutina[] $rutinas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'id_Paciente' => 'required',
		'Nombre' => 'required',
		'Ap_Paterno' => 'required',
		'Ap_Materno' => 'required',
		'Domicilio' => 'required',
		'Telefono' => 'required',
		'Correo_Electronico' => 'required',
		'Fecha_Nac' => 'required',
    ];

    
    protected $table= 'pacientes';
    protected $primaryKey = 'id_Paciente';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Paciente','Nombre','Ap_Paterno','Ap_Materno','Domicilio','Telefono','Correo_Electronico','Fecha_Nac'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rutinas()
    {
        return $this->hasMany('App\Models\Rutina', 'id_paciente', 'id_Paciente');
    }
    

}
