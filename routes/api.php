<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Datos_Personales;
use App\Alumno;
use App\Tutor;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('buscar_tutores', function (Request $request) {
    $tutores = Datos_Personales::find($request->id);
    return $tutores;
});