<?php

use Illuminate\Support\Facades\Route;
use App\Models\Negocios;
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
//Ruta predeterminada
/*Route::get('/', function (Negocios $negocios) {
    $negocios=Negocios::all();
    return view('inicioSinAuth',compact('negocios'));
});*/
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();
//POSIBLE AGREGAR VISTA ADMIN


//USUARIO CONTROLLER
Route::get('/',[App\Http\Controllers\UsuarioController::class,'loginUser'])->name('loginUser');
Route::get('/inicio',[App\Http\Controllers\UsuarioController::class,'index'])->name('inicio');
Route::get('/crearUsuario',[App\Http\Controllers\UsuarioController::class,'create'])->name('crearUsuario');
Route::post('/verificar',[App\Http\Controllers\UsuarioController::class,'verificar'])->name('verificar');
Route::post('/crear',[App\Http\Controllers\UsuarioController::class,'store'])->name('crear');

//DUEÑO NEGOCIO CONTROLLER
Route::get('/local/{id}',[App\Http\Controllers\DueñonegocioController::class,'index'])->name('local');
Route::get('/pedidosLocal/{id}',[App\Http\Controllers\DueñonegocioController::class,'show'])->name('pedidosLocal');
Route::get('/crearDueño',[App\Http\Controllers\DueñonegocioController::class,'create'])->name('crearDueño');
Route::get('/crearProducto/{id}',[App\Http\Controllers\DueñonegocioController::class,'createProducto'])->name('crearProducto');
Route::delete('/eliminarProductoLocal/{id}',[App\Http\Controllers\DueñonegocioController::class,'destroy'])->name('eliminarProductoLocal');
Route::post('/guardarDueño',[App\Http\Controllers\DueñonegocioController::class,'store'])->name('guardarDueño');
Route::post('/guardarArticulo/{id}',[App\Http\Controllers\DueñonegocioController::class,'storeArticulo'])->name('guardarArticulo');
Route::post('/actualizarArticulo/{id}',[App\Http\Controllers\DueñonegocioController::class,'update'])->name('actualizarArticulo');

//NEGOCIO CONTROLLER
Route::get('/negocio/{id}',[App\Http\Controllers\NegociosController::class,'show'])->name('negocio');

//CARRITO CONTROLLER
Route::get('/carrito/{id}',[App\Http\Controllers\CarritoController::class,'show'])->name('carrito');
Route::delete('/carrito/eliminarProducto/{id}',[App\Http\Controllers\CarritoController::class,'destroy'])->name('eliminarProducto');
Route::post('/guardarProducto',[App\Http\Controllers\CarritoController::class,'store'])->name('guardarProducto');
Route::post('/actualizarProducto/{id}',[App\Http\Controllers\CarritoController::class,'update'])->name('actualizarProducto');

//Pedidos controller
Route::post('/generarPedido/{id}',[App\Http\Controllers\PedidosController::class,'store'])->name('generarPedido');
Route::get('/pedidos',[App\Http\Controllers\PedidosController::class,'show'])->name('verPedidos');