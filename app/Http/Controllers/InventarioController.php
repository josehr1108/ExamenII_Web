<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::all()->toArray();
        return response()->json($inventarios);
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
            Inventario::create($request->all());
            return response()->json(['mensaje' => "Se creo el inventario exitosamente"],200);

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
        $inventario = Inventario::find($id);
        if($inventario){
            return response()->json($inventario,200);
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
        $inventario = Inventario::find($id);
        if($inventario){
            try{
                $inventario->cantidad = $request->cantidad;
                $inventario->cantidadMinima = $request->cantidadMinima;
                $inventario->cantidadMaxima = $request->cantidadMaxima;
                $inventario->iv = $request->iv;

                $inventario->save();

                return response()->json(['mensaje' => 'El inventario se edito exitosamente'],200);
            }catch (Exception $exception){
                $mensaje = $exception->getMessage();
                return response()->json(['mensaje' => $mensaje],500);
            }
        }else{
            return response()->json(['mensaje' => 'El inventario no existe'],404);
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
        $inventario = Inventario::find($id);
        if($inventario){
            $inventario->delete();
            return response()->json(['mensaje' => 'El inventario se borro exitosamente'],404);
        }else{
            return response()->json(['mensaje' => 'El producto no existe'],404);
        }
    }
}
