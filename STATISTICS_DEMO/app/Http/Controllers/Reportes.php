<?php

namespace App\Http\Controllers;
use DB; 
use Illuminate\Http\Request;

class Reportes extends Controller
{
    public function index(){
            
        $items = \App\Registro::all(['Valor', 'Fecha']);
        return view('reports',['items' => $items]);;
    
    }
}
