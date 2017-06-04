<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use League\Flysystem\Exception;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all()->toArray();
        return response()->json($clientes,200);
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
        $clienteExiste = Cliente::where('cedula',$request->cedula)->first();
        if($clienteExiste){
            return response()->json(['mensaje' => 'El cliente ya existe'],200);
        }
        else{
            try{
                Cliente::create($request->all());
                return response()->json(['mensaje' => "Se creo el cliente exitosamente"],200);

            }catch (\Exception $exception){
                $exceptionMsg = "Error: {$exception->getMessage()}";
                return response()->json(['mensaje' => $exceptionMsg],500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cedula)
    {
        $cliente = Cliente::where('cedula',$cedula)->first();
        if($cliente){
            return response()->json($cliente,200);
        }else{
            return response()->json(['mensaje' => 'El cliente solicitado no existe!'],404);
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
    public function update(Request $request, $cedula)
    {
        $cliente = Cliente::where('cedula',$cedula)->first();
        if($cliente){
            try{
               /* $cliente->direccion = $request->input('direccion');
                $cliente->estadoCivil = $request->input('estadoCivil');
                $cliente->descuento = $request->input('descuento');*/

                Cliente::where('cedula',$cedula)->update(['direccion' => $request->input('direccion'),
                                  'estadoCivil' => $request->input('estadoCivil'),
                                  'descuento' => $request->input('descuento')]);
                //$cliente->save();
                return response()->json(['mensaje' => 'El cliente se edito exitosamente'],200);
            }catch (Exception $exception){
                $mensaje = $exception->getMessage();
                return response()->json(['mensaje' => $mensaje],500);
            }
        }else{
            return response()->json(['mensaje' => 'El cliente no existe'],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cedula)
    {
        try{
            $cliente = Cliente::where('cedula',$cedula)->first();

            if(!$cliente){
                return response()->json(['mensaje' => 'No existe el cliente solicitado'],404);
            }else{
                Cliente::where('cedula',$cedula)->delete();
                return response()->json(['mensaje' => 'Usuario eliminado exitosamente'],200);
            }
        }catch (Exception $exception){
            $mensaje = $exception->getMessage();
            return response()->json(['mensaje' => $mensaje],500);
        }

    }
}
