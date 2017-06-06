@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Producto</th>
                    <th>Cantidad Anterior</th>
                    <th>Cantidad Nueva</th>
                    <th>Fecha Actualizacion</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($movimientos as $movimiento)
                    <tr>
                        <td>{{$movimiento->id}}</td>
                        <td>{{$movimiento->producto}}</td>
                        <td>{{$movimiento->cantidadAnterior}}</td>
                        <td>{{$movimiento->cantidadNueva}}</td>
                        <td>{{$movimiento->fechaActualizacion}}</td>
                        @if (Auth::user()->admin == "Administrador")
                            <td><button onclick="borrar({{$movimiento->id}})">Borrar</button></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function borrar(id){
            url = "/api/movimientos/"+id;
            $.ajax(url,{
                method : 'DELETE',
                success : function (data) {
                    alert(data.mensaje);
                }
            });
        }
    </script>
@endsection
