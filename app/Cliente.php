<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'fechaNacimiento', 'direccion', 'estadoCivil', 'sexo', 'fechaIngreso','descuento'
    ];
}
