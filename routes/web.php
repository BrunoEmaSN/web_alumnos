<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Alumnos_Controller;
use App\Http\Controllers\Docentes_Controller;
use App\Http\Controllers\Tutores_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'inicio')->name('inicio');

Route::resource('alumnos', 'Alumnos_Controller');

Route::resource('docentes', 'Docentes_Controller');

Route::resource('tutores', 'Tutores_Controller');

Auth::routes(['register' => false]);
