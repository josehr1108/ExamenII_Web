@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Identificador</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Familia</th>
                        <th>Casa fabricación</th>
                        <th>Tipo unidad</th>
                        <th>Departamento</th>
                        <th>Activo</th>
                        <th>Fecha ingreso</th>
                        <th>Unidad</th>
                        <th>Impuesto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->marca}}</td>
                        <td>{{$producto->familia}}</td>
                        <td>{{$producto->casaFabricacion}}</td>
                        <td>{{$producto->tipoUnidad}}</td>
                        <td>{{$producto->departamento}}</td>
                        <td>{{$producto->activo}}</td>
                        <td>{{$producto->fechaIngreso}}</td>
                        <td>{{$producto->unidad}}</td>
                        <td>{{$producto->impuesto}}</td>
                        @if (Auth::user()->admin == "Administrador")
                        <td><button onclick="borrar({{$producto->id}})">Borrar</button></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function borrar(id){
            url = "/api/productos/"+id;
            $.ajax(url,{
                method : 'DELETE',
                success : function (data) {
                    alert(data.mensaje);
                }
            });
        }
    </script>
@endsection
