<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos_Personales extends Model
{
    protected $table = 'datos_personales';

    protected $primaryKey = 'id_datos_personales';

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'sexo',
        'dni',
        'estado_civil',
        'nacionalidad',
        'tipo_documento',
        'documento',
        'telefono_fijo',
        'telefono_movil',
        'domicilio',
        'numero',
        'departamento',
        'piso'
    ];
}
