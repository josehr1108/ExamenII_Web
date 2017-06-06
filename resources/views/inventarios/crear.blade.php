@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Formulario Inventario</h3>
            </div>
            <div class="panel-body">
                <form class="form-inline" method="post" action="/api/inventarios">
                    <div class="form-group">
                        <label for="id">Id:</label>
                        <input type="text" class="form-control" name="id" placeholder="Id">
                    </div>
                    <div class="form-group">
                        <label for="producto">Producto:</label>
                        <input type="number" class="form-control" name="producto" placeholder="Producto">
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" class="form-control" name="cantidad" placeholder="Cantidad">
                    </div>
                    <div class="form-group">
                        <label for="cantidadMinima">Cantidad Minima:</label>
                        <input type="number" class="form-control" name="cantidadMinima" placeholder="Cantidad Minima">
                    </div>
                    <div class="form-group">
                        <label for="cantidadMaxima">Cantidad Maxima:</label>
                        <input type="number" class="form-control" name="cantidadMaxima" placeholder="Cantidad Maxima">
                    </div>
                    <div class="form-group">
                        <label for="iv">Iv:</label>
                        <input type="text" class="form-control" name="iv" placeholder="Iv">
                    </div>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
@endsection