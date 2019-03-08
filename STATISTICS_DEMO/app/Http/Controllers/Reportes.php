<?php

namespace App\Http\Controllers;
use DB; 
use Illuminate\Http\Request;

class Reportes extends Controller
{
    public function index(){
            
        $rand = rand(0,100);
        $fecha_Hoy = date("Y-m-d H:i:s");


        DB::table('Registro')->insert(
            ['Valor' => $rand, 'Fecha' => $fecha_Hoy]
        );

        $items = \App\Registro::all(['Valor', 'Fecha']);
        return view('reports',['items' => 'James']);;
//        return $items; 
    
    }
}
