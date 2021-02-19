<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos_Padres extends Model
{
    protected $table = 'datos_padres';

    protected $primaryKey = 'id_datos_padres';

    protected $fillable = [
        'id_tutores',
        'cuil',
        'situacion_academica',
        'profesion'
    ];

    public function tutores()
    {
        return $this->belongsTo('App\Models\Tutor');
    }
}
