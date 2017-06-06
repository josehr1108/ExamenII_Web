<?php

namespace App\Http\Controllers;

use App\Cliente;
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
        $clientes = Cliente::all()->toArray();

        return view('clientes.clientes',['clientes' => $clientes]);
    }
}
