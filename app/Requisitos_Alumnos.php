<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Eloquent;

class Requisitos_Alumnos extends Model
{
    protected $table = 'requisitos_alumnos';

    protected $primaryKey = 'id_ra';

    public $incrementing = false;

    protected $fillable = [
        'partida_nacimiento',
        'dni',
        'cuil',
        'foto_4x4',
        'contrato'
    ];

    public function alumnos()
    {
        return $this->hasMany('App\Alumno');
    }
}
