<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Producto;
use App\Inventario;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function vistaClientes(){
        $clientes = Cliente::all()->toJson();
        return view('clientes.clientes',['clientes' => json_decode($clientes)]);
    }

    public function vistaBotones(){
        return view('clientes.btncliente');
    }

    public function vistaCrear(){
        return view('clientes.crear');
    }

    public function vistaProductos(){
        $productos = Producto::all()->toJson();
        return view('productos.productos',['productos' => json_decode($productos)]);
    }

    public function vistaBotonesPro(){
        return view('productos.btnproducto');
    }

    public function vistaCrearPro(){
        return view('productos.crear');
    }

    public function vistaInventarios(){
        $inventarios= Inventario::all()->toJson();
        return view('inventarios.inventarios',['inventarios' => json_decode($inventarios)]);
    }

    public function vistaBotonesInv(){
        return view('inventarios.btninventario');
    }

    public function vistaCrearInv(){
        $productos = Producto::all()->toJson();
        return view('inventarios.crear',['productos' => json_decode($productos)]);
    }
}
