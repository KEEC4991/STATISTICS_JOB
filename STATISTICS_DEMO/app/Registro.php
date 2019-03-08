<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //Modelo de los datos a ingresar dentro de la base de datos
    // - Caracteristicas:
    // 1. Se almacena el numero generado aleatoriamente por el controlador. (Nota: los numeros generados aletoriamente son solo enteros entre 0 y 100).
    // 2. Se almacena la hora en que se genero el número aletaorio (Nota: la hora deberá ser almacenada como una cadena) 

    protected $attributes = [
        'Id',
        'Valor',
        'Fecha'
    ];

    public function up(){
        Schema::create('Registro', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Valor');
            $table->string('Fecha');
        });
    }

    public function down(){
        Schema::dropIfExists('Registro');
    }

}
