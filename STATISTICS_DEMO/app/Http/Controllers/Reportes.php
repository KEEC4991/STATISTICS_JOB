<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reportes extends Controller
{
    public function index(){
            
        $rand = rand(0,100);
        $fecha_Hoy = date("Y-m-d H:i:s");

        $registro = \App\Registro::create(
                ['Valor' => $rand,
                'Fecha'  => $fecha_Hoy  
            ]);

        $items = \App\Registro::all(['Valor', 'Fecha']);
        return $items; 
    
    }
}
