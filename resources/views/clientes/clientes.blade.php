@extends('layouts.app')

@section('content')
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
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->cedula}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->apellido}}</td>
                        <td>{{$cliente->fechaNacimiento}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->estadoCivil}}</td>
                        <td>{{$cliente->sexo}}</td>
                        <td>{{$cliente->fechaIngreso}}</td>
                        <td>{{$cliente->descuento}}</td>
                        <td><button onclick="borrar({{$cliente->cedula}})">Borrar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function borrar(cedula){
            url = "/api/clientes/"+cedula;
            $.ajax(url,{
                method : 'DELETE',
                success : function (data) {
                    alert(data.mensaje);
                }
            });
        }
    </script>
@endsection
