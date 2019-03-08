<?php

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
use Carbon\Carbon;

Route::get('/', function () {
    //return view('welcome');
    return view('start');
});

Route::get('/reporte',function(){
    return view('reports');
});

Route::get('/generacion_random', 'GeneradorRandom@index');

Route::get('/reporte_registros', function(){

    $rand = rand(0,100);
    $fecha_Hoy = date("Y-m-d H:i:s");
    $registro = new \App\RegistroRND;
    $registro->Valor = $rand;
    $registro->Fecha = $fecha_Hoy;
    $registro->save();

    $items = \App\Registro::all(['Valor', 'Fecha']);
    return $items; 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
