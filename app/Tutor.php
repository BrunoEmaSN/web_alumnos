<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';

    protected $primaryKey = 'id_t';

    protected $fillable = [
        'tiene_pareja',
        'telefono_laboral',
        'ocupacion',
        'cuil',
        'nivel_academico',
        'situacion_academica',
        'profesion'
    ];

    public function datos_personales()
    {
        return $this->belongsTo('App\Models\Datos_Personales');
    }

    public function datos_padres()
    {
        return $this->hasMany('App\Models\Dastos_Padres');
    }

    public function pareja_tutor()
    {
        return $this->hasMany('App\Models\Pareja_Tutor');
    }

    public function tutores_alumnos()
    {
        return $this->hasMany('App\Models\Tutores_Alumnos');
    }
}
