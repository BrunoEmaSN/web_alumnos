<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Datos_Personales;

use App\Traits\Alumnos_Traits;
use App\Traits\Docentes_Traits;
use App\Traits\Tutores_Traits;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Class Alumnos {
    use Alumnos_Traits;
    public function show()
    {
        return $this->alumnos_show();
    }
}

Class Docentes {
    use Docentes_Traits;
    public function show()
    {
        return $this->docentes_show();
    }
}

Class Tutores {
    use Tutores_Traits;
    public function show()
    {
        return $this->tutores_show();
    }
}

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('alumnos', function () {
    $alumnos = new Alumnos;
    return $alumnos->show();
});

Route::get('docentes', function () {
    $docentes = new Docentes;
    return $docentes->show();
});

Route::get('tutores', function () {
    $tutores = new Tutores;
    return $tutores->show();
});

Route::get('buscar_tutores', function (Request $request) {
    $tutores = Datos_Personales::find($request->id);
    return $tutores;
});