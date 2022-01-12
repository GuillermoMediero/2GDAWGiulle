<?php

use App\Http\Controllers\MaquinasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('maquinas', function (){
    $maquinas = array('Windows','Mac','Linux','Salacer');
    $versiones = array('Version 1.1', 'Version 1.5', 'Version 2.0', 'Version 3.0', 'Version 3.2');
    return view('listas.index', [ "autor" => "Pablo Escobar", "maquinas" => $maquinas, "versiones" => $versiones]);
});


Route::get('maquinas/controlador/{id}', function ($id) {
    return '<h1>Maquina creada con la id ' . $id . '</h1>';
});

Route::get('maquinas/controlador', [MaquinasController::class, 'mostrar']);