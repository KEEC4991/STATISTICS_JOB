<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro_Random extends Model
{
    protected $table = 'Registro_Aleatorios';

    protected $attributes = [
        'Id',
        'Valor',
        'Fecha'
    ];

    public function up(){
        Schema::create('Registro_Aleatorios', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Valor');
            $table->string('Fecha');
        });
    }

    public function down(){
        Schema::dropIfExists('Registro');
    }
}
