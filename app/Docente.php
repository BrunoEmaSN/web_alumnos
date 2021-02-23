<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';

    protected $primaryKey = 'id_d';

    protected $fillable = [
        'fecha_agregado',
        'sede',
        'titulo',
        'carrera',
        'cuit',
        'estado',
        'docente_observaciones'
    ];

    public function datos_personales()
    {
        return $this->belongsTo('App\Models\Datos_Personales');
    }
}
