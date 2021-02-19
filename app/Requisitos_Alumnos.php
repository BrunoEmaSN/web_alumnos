<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisitos_Alumnos extends Model
{
    protected $table = 'requisitos_alumnos';

    protected $primaryKey = 'id_requisitos_alumnos';

    protected $fillable = [
        'partida_nacimiento',
        'dni',
        'cuil',
        'foto_4x4',
        'contrato'
    ];
}
