<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route:resource('users','UserController');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/clientes', 'HomeController@vistaClientes');

Route::get('/clientes/CRUD', 'HomeController@vistaBotones');

Route::get('/clientes/crear','HomeController@vistaCrear');

Route::get('/productos', 'HomeController@vistaProductos');

Route::get('/productos/CRUD', 'HomeController@vistaBotonesPro');

Route::get('/productos/crear','HomeController@vistaCrearPro');

Route::get('/inventarios', 'HomeController@vistaInventarios');

Route::get('/inventarios/CRUD', 'HomeController@vistaBotonesInv');

Route::get('/inventarios/crear','HomeController@vistaCrearInv');

Route::get('/movimientos', 'HomeController@vistaMovimientos');

Route::get('/movimientos/CRUD', 'HomeController@vistaBotonesMov');

Route::get('/movimientos/crear','HomeController@vistaCrearMov');