@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Formulario Movimineto</h3>
            </div>
            <div class="panel-body">
                <form class="form-inline" method="post" action="/api/movimientos">
                    <div class="form-group">
                        <label for="producto">Producto:</label>
                        <select name="producto">
                            @foreach($productos as $producto)
                                <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cantidadAnterior">Cantidad Anterior:</label>
                        <input type="number" class="form-control" name="cantidadAnterior" placeholder="Cantidad Anterior">
                    </div>
                    <div class="form-group">
                        <label for="cantidadNueva">Cantidad Nueva:</label>
                        <input type="number" class="form-control" name="cantidadNueva" placeholder="Cantidad Nueva">
                    </div>
                    <div class="form-group">
                        <label for="fechaActualizacion">Fecha Actualizacion:</label>
                        <input type="date" class="form-control" name="fechaActualizacion" placeholder="Fecha Actualizacion">
                    </div>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
@endsection