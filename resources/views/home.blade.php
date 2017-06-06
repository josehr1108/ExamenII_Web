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
                    <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                </div>
                <div class="form-group">
                    <label for="cedula">Cédula:</label>
                    <input class="form-control" id="cedula" placeholder="Cédula">
                </div>
                <div class="form-group">
                    <label for="fechaNaciminto">Fecha de Nacimineto:</label>
                    <input type="date" class="form-control" id="fechaNaciminto">
                </div>
                <div class="form-group">
                    <label for="dereccion">Dirección:</label>
                    <input class="form-control" id="dereccion" placeholder="Dirección">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="estadoCivil">Estado civil:</label>
                        <input type="text" class="form-control" id="estadoCivil" placeholder="Estado civil">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <input type="text" class="form-control" id="sexo" placeholder="Sexo">
                    </div>
                    <div class="form-group">
                        <label for="descuento">Descuento:</label>
                        <input type="number" class="form-control" id="descuento" placeholder="Descuento">
                    </div>
                    <div class="form-group">
                        <label for="fechaIngreso">Fecha ingreso:</label>
                        <input type="date" class="form-control" id="fechaIngreso">
                    </div>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nacimineto</th>
                    <th>Dirección</th>
                    <th>Estado Civil</th>
                    <th>Sexo</th>
                    <th>Fecha Ingreso</th>
                    <th>Descuento</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
