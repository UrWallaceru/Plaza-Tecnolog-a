<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negocios;
use App\Models\Productos;
use App\Models\User;
use App\Models\Carritos;
//use App\Models\comprastemp;

class CarritoController extends Controller
{
    public function show($id)
    {
        //Mostrar Productos del carrito
        $productos = Carritos::where("id_user","=",$id)->get();
        //$productos = Productos::where('id_negocio', $id)->get();
        //$total = $productos->sum('precio');
        $total=0;
        foreach ($productos as $producto) {
            $cantidad = $producto->cantidad;
            $total +=($cantidad * $producto->precio);
        }
        return view('UsuarioNormal.carrito',compact('productos','total') );
    }

    public function create()
    {
        return 'FORMULARIO PRODUCTO';
    }

    public function store(Request $request)
    {
        //
        $compras = new Carritos;
        $compras->id_user = 1;
        $compras->id_producto = $request->input('id_producto');
        $compras->cantidad = $request->input('cantidad');
        $compras->precio = $request->input('precio');
        $compras->nombre = $request->input('nombre');
        $compras->save();
        $id=$compras->id;
        return redirect()->route('inicio');
    }

    public function destroy($id)
    {
        //
        $carrito =  Carritos::findOrFail($id);
        $carrito->delete();

        return back()->with('succes','Producto Eliminado del carrito');
    }

    public function update(Request $request,$id)
    {
        //
        $compras = Carritos::findOrFail($id);
        //$compras->id_user = 1;
        //$compras->id_producto = $request->input('id_producto');
        $compras->cantidad = $request->input('cantidad');
        $compras->precio = $request->input('precio');
        $compras->nombre = $request->input('nombre');
        $compras->save();
        return back()->with('succes','Producto actualizado del carrito');
    }
}
