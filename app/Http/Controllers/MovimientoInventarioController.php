<?php

namespace App\Http\Controllers;

use App\MovimientoInventario;
use Illuminate\Http\Request;

class MovimientoInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimiento = MovimientoInventario::all()->toArray();
        return response()->json($movimiento);
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
            MovimientoInventario::create($request->all());
            return response()->json(['mensaje' => "Se creo el movimiento exitosamente"],200);
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
        $movimiento = MovimientoInventario::find($id);
        if($movimiento){
            return response()->json($movimiento,200);
        }else{
            return response()->json(['mensaje' => 'El movimiento solicitado no existe!'],404);
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
        $movimiento = MovimientoInventario::find($id);
        if($movimiento){
            try{
                $movimiento->cantidadAnterior = $request->cantidadAnterior;
                $movimiento->cantidadNueva = $request->cantidadNueva;
                $movimiento->fechaActualizacion = $request->fechaActualizacion;

                $movimiento->save();

                return response()->json(['mensaje' => 'El movimiento se edito exitosamente'],200);
            }catch (Exception $exception){
                $mensaje = $exception->getMessage();
                return response()->json(['mensaje' => $mensaje],500);
            }
        }else{
            return response()->json(['mensaje' => 'El movimiento no existe'],404);
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
        $movimiento = MovimientoInventario::find($id);
        if($movimiento){
            $movimiento->delete();
            return response()->json(['mensaje' => 'El movimiento se borro exitosamente'],404);
        }else{
            return response()->json(['mensaje' => 'El movimiento no existe'],404);
        }
    }
}
