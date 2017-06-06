@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Identificador</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Cantidad Minima</th>
                        <th>Cantidad Maxima</th>
                        <th>Iv</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventarios as $inventario)
                    <tr>
                        <td>{{$inventario->id}}</td>
                        <td>{{$inventario->producto}}</td>
                        <td>{{$inventario->cantidad}}</td>
                        <td>{{$inventario->cantidadMinima}}</td>
                        <td>{{$inventario->cantidadMaxima}}</td>
                        <td>{{$inventario->iv}}</td>
                        <td><button onclick="borrar({{$inventario->id}})">Borrar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function borrar(id){
            url = "/api/inventarios/"+id;
            $.ajax(url,{
                method : 'DELETE',
                success : function (data) {
                    alert(data.mensaje);
                }
            });
        }
    </script>
@endsection
