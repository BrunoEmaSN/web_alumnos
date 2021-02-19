<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $primaryKey = 'id_alumnos';

    protected $fillable = [
        'id_datos_personales',
        'id_requisitos_alumnos',
        'nivel',
        'grado_ano',
        'division',
        'tipo_estado',
        'lugar_nacimiento',
        'alumno_observaciones'
    ];

    public function datos_personales()
    {
        return $this->belongsTo('App\Models\Datos_Personales');
    }

    public function requisitos_alumnos()
    {
        return $this->belongsTo('App\Models\Requisitos_Alumnos');
    }

    public function tutores_alumnos()
    {
        return $this->hasMany('App\Models\Tutor_Alumno');
    }
}
