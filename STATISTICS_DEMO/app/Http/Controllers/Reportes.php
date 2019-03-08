<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reportes extends Controller
{
    public function index(){
            
        $rand = rand(0,100);
        $fecha_Hoy = date("Y-m-d H:i:s");
        $registro = new \App\RegistroRND;
        $registro->Valor = $rand;
        $registro->Fecha = $fecha_Hoy;
        $registro->save();

        $items = \App\Registro::all(['Valor', 'Fecha']);
        return $items; 
    
    }
}
