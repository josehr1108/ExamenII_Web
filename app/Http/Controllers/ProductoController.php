<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all()->toArray();
        return response()->json($productos,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Producto::create($request->all());
            return response()->json(['mensaje' => "Se creo el producto exitosamente"],200);

        }catch (\Exception $exception){
            $exceptionMsg = "Error: {$exception->getMessage()}";
            return response()->json(['mensaje' => $exceptionMsg],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Cliente::find($id);
        if($producto){
            return response()->json($producto,200);
        }else{
            return response()->json(['mensaje' => 'El producto solicitado no existe!'],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        if($producto){
            try{
                $producto->nombre = $request->nombre;
                $producto->marca = $request->marca;
                $producto->familia = $request->familia;
                $producto->casaFabricacion = $request->casaFabricacion;
                $producto->tipoUnidad = $request->tipoUnidad;
                $producto->departamento = $request->departamento;
                $producto->activo = $request->activo;
                $producto->fechaIngreso = $request->fechaIngreso;
                $producto->unidad = $request->unidad;
                $producto->impuesto = $request->impuesto;

                $producto->save();

                return response()->json(['mensaje' => 'El producto se edito exitosamente'],200);
            }catch (Exception $exception){
                $mensaje = $exception->getMessage();
                return response()->json(['mensaje' => $mensaje],500);
            }
        }else{
            return response()->json(['mensaje' => 'El producto no existe'],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        if($producto){
            $producto->delete();
            return response()->json(['mensaje' => 'El producto se borro exitosamente'],404);
        }else{
            return response()->json(['mensaje' => 'El producto no existe'],404);
        }
    }
}
