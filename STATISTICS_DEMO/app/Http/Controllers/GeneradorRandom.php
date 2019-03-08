<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class GeneradorRandom extends Controller
{
    public function index(){
       	//Generacion del numero random
        $rand = rand(0,100);

        //Fecha del servidor, cuando se realizo la solicitud
        $fecha_Hoy = date("Y-m-d H:i:s");

        //Json Object de respuesta
        $respuesta = [ 'valor' => $rand, 'fecha_generacion' => $fecha_Hoy];

        //Almacenamiento del valor
        
        DB::table('Registro')->insert(
            ['Valor' => $rand, 'Fecha' => $fecha_Hoy]
        );

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
    }
}
