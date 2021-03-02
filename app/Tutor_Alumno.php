<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor_Alumno extends Model
{
    protected $table = 'tutores_alumnos';

    protected $primaryKey = 'id_ta';

    protected $fillable = [
        'id_tutores',
        'id_alumnos',
        'conviven_con_alumno',
        'relacion_parentesco'
    ];

    public function tutores()
    {
        return $this->belongsTo('App\Models\Tutor');
    }

    public function alumnos()
    {
        return $this->belongsTo('App\Models\Alumno');
    }
}
