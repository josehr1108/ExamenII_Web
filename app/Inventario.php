<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'producto', 'cantidad', 'cantidadMinima', 'cantidadMaxima', 'iv'
    ];

    public function producto()
    {
        return $this->hasOne('App\Producto');
    }
}
