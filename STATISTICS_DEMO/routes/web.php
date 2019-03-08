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

Route::get('/generacion_random', function(){

	//Generacion del numero random
    $rand = rand(0,100);

    //Fecha del servidor, cuando se realizo la solicitud
    $fecha_Hoy = date("Y-m-d H:i:s");

    //Json Object de respuesta
    $respuesta = [ 'valor' => $rand, 'fecha_generacion' => $fecha_Hoy];

    //Almacenamiento del valor
/*
    $registro = new Registro;
    $registro->Valor = $rand;
    $registro->Fecha = $fecha_Hoy;
    $registro->save();
*/
    //Headers para el response
    $headers = [
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Methods'     => 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Credentials' => 'true',
            'Access-Control-Max-Age'           => '86400',
            'Access-Control-Allow-Headers'     => 'Content-Type, Authorization, X-Requested-With'
        ];

    //Retorno del valor de respuesta
    return response()->json($respuesta,200,$headers);

});

Route::get('/reporte_registros', function(){
    dd(\app\Registro::all());

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
