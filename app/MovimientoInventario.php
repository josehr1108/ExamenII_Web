<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimientoInventario extends Model
{
    protected $fillable = [
        'producto', 'cantidadAnterior', 'cantidadNueva', 'fechaActualizacion'
    ];

    public function producto()
    {
        return $this->hasOne('App\Producto');
    }
}
