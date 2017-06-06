@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Formulario Producto</h3>
            </div>
            <div class="panel-body">
                <form class="form-inline" method="post" action="/api/productos">
                    <div class="form-group">
                        <label for="id">Id:</label>
                        <input type="text" class="form-control" name="id" placeholder="Id">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" class="form-control" name="marca" placeholder="Marca">
                    </div>
                    <div class="form-group">
                        <label for="familia">Familia:</label>
                        <input class="form-control" name="familia" placeholder="Familia">
                    </div>
                    <div class="form-group">
                        <label for="casaFabricacion">Casa Fabricacion:</label>
                        <input type="text" class="form-control" name="casaFabricacion" placeholder="Casa Fabricacion">
                    </div>
                    <div class="form-group">
                        <label for="tipoUnidad">Tipo Unidad:</label>
                        <input class="form-control" name="tipoUnidad" placeholder="Tipo Unidad">
                    </div>
                    <div class="form-group">
                        <label for="departamento">Departamento:</label>
                        <input type="text" class="form-control" name="departamento" placeholder="Departamento">
                    </div>
                    <div class="form-group">
                        <label for="activo">Activo:</label>
                        <input type="number" class="form-control" name="activo" placeholder="Activo">
                    </div>
                    <div class="form-group">
                        <label for="fechaIngreso">Fecha ingreso:</label>
                        <input type="date" class="form-control" name="fechaIngreso">
                    </div>
                    <div class="form-group">
                        <label for="unidad">Unidad:</label>
                        <input type="text" class="form-control" name="unidad" placeholder="Unidad">
                    </div>
                    <div class="form-group">
                        <label for="impuesto">Impuesto:</label>
                        <input type="number" class="form-control" name="impuesto">
                    </div>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
@endsection