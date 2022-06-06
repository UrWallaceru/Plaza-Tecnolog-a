<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pedidos;
use App\Models\Negocios;
use App\Models\Productos;
use App\Models\codigos;

class DueñonegocioController extends Controller
{
    //
    public function show($id)
    {

        $pedidos = Pedidos::all()->where('id_negocio','=',$id);
        return view('DueñoNegocio.pedidos',compact('pedidos','id'));
    }

    public function index($id)
    {
        //home
        //Mostrar Productos
        $negocio=Negocios::findOrFail($id);
        $productos = Productos::where('id_negocio', $id)->get();
        return view('DueñoNegocio.index',compact('negocio','productos','id'));
        
    }

    public function loginUser()
    {
        //login
        return view('DueñoNegocio.login');
    }

    public function create()
    {
        //crear
        return view('DueñoNegocio.register');
    }

    public function store(Request $request)
    {
        //
        $usuario = new User;
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('correo');
        $usuario->password = $request->input('password');
        $usuario->tipo = $request->input('tipo');

        $codePass=codigos::all();
        foreach ($codePass as $code) {
            if ($code->codigo==$request->input('codigo')) {
                $usuario->save();

                //creando negocio
                $codNegocio = new Negocios;
                $negocio=User::latest('id')->first();
                $codNegocio->id=$negocio->id;
                $codNegocio->nombre = $request->input('nomLocal');
                $codNegocio->numLocal = $request->input('numLocal');
                $codNegocio->user_id = $negocio->id;
                $codNegocio->save();
                return view('UsuarioNormal.login');
            }
        }
        return redirect()->back();
    }

    public function createProducto($id)
    {
        //crear
        return view('Dueñonegocio.create', compact('id'));
    }

    public function storeArticulo(Request $request,$id)
    {
        //crear
        $producto = new Productos;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->id_negocio = $request->id_negocio;
        $producto->save();

        $negocio=Negocios::findOrFail($id);
        $productos = Productos::where('id_negocio', $id)->get();
        return view('DueñoNegocio.index',compact('negocio','productos','id'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
        $producto =  Productos::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->save();
        return back()->with('succes','Producto Eliminado del carrito');
    }

    public function destroy($id)
    {
        //
        $producto =  Productos::findOrFail($id);
        $producto->delete();

        return back()->with('succes','Producto Eliminado del Local');
    }
        
}
