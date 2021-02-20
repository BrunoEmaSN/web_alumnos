<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $primaryKey = 'id_a';

    public $incrementing = false;

    protected $fillable = [
        'fecha_agregado',
        'nivel',
        'grado_ano',
        'division',
        'tipo_estado',
        'lugar_nacimiento',
        'alumno_observaciones'
    ];

    public function datos_personales()
    {
        return $this->belongsTo('App\Datos_Personales');
    }

    public function requisitos_alumnos()
    {
        return $this->belongsTo('App\Requisitos_Alumnos');
    }

    public function tutores_alumnos()
    {
        return $this->hasMany('App\Tutor_Alumno');
    }
}
