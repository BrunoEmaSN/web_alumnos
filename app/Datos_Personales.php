<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Datos_Personales extends Model
{
    protected $table = 'datos_personales';

    protected $primaryKey = 'id_dp';

    public $incrementing = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'sexo',
        'dni',
        'estado_civil',
        'nacionalidad',
        'tipo_documento',
        'telefono_fijo',
        'telefono_movil',
        'domicilio',
        'numero',
        'departamento',
        'piso'
    ];

    public function alumnos()
    {
        return $this->hasMany('App\Alumno');
    }
}
