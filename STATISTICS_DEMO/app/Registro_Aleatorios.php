<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro_Aleatorios extends Model
{

    public function up(){
        Schema::create('Registro_Aleatorios', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Valor');
            $table->string('Fecha');
        });
    }
}
