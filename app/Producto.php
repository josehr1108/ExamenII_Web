<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'marca', 'familia', 'casaFabricacion', 'tipoUnidad', 'departamento', 'activo', 'fechaIngreso','unidad','impuesto'
    ];
}
