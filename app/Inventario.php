<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'idProducto', 'cantidad', 'cantidadMinima', 'cantidadMaxima', 'iv'
    ];
}
