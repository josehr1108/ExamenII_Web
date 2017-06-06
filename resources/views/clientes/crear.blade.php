@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Formulario cliente</h3>
            </div>
            <div class="panel-body">
                <form class="form-inline" method="post" action="/api/clientes">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula:</label>
                        <input class="form-control" name="cedula" placeholder="Cédula">
                    </div>
                    <div class="form-group">
                        <label for="fechaNacimiento">Fecha de Nacimineto:</label>
                        <input type="date" class="form-control" name="fechaNacimiento">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input class="form-control" name="direccion" placeholder="Dirección">
                    </div>
                    <div class="form-group">
                        <label for="estadoCivil">Estado civil:</label>
                        <input type="text" class="form-control" name="estadoCivil" placeholder="Estado civil">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <input type="text" class="form-control" name="sexo" placeholder="Sexo">
                    </div>
                    <div class="form-group">
                        <label for="descuento">Descuento:</label>
                        <input type="number" class="form-control" name="descuento" placeholder="Descuento">
                    </div>
                    <div class="form-group">
                        <label for="fechaIngreso">Fecha ingreso:</label>
                        <input type="date" class="form-control" name="fechaIngreso">
                    </div>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
@endsection

