<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negocios;
use App\Models\Productos;
use App\Models\User;
use App\Models\Carritos;
use App\Models\Pedidos;

class PedidosController extends Controller
{
    //
    public function store($id)
    {
        //
        $carritos= Carritos::all()->where('id_user','=',$id); //para sacar valores de carrito
        //$total=0;//obtiene TOTAL a pagar X PRODUCTO
        /*foreach ($carritos as $producto) {
            $cantidad = $producto->cantidad;
            $total +=($cantidad * $producto->precio);
        }*/
        foreach ($carritos as $carrito) {
            $pedidos = new Pedidos;
            $pedidos->id_user = $id;
            $pedidos->id_negocio = $carrito->id_negocio;
            $pedidos->id_producto = $carrito->id_producto;
            $pedidos->nombre = $carrito->nombre;
            $pedidos->total = ($carrito->precio*$carrito->cantidad);
            $pedidos->cantidad = $carrito->cantidad;
                    //actualizar tabla productos
                $productos = Productos::all()->where('id','=',$carrito->id_producto);
                foreach ($productos as $actualizar) {
                    $actualizar->cantidad -=($carrito->cantidad);
                    $actualizar->save();
                }
            $pedidos->referencia = "N0000".$pedidos->id_user;
            $pedidos->save();
        }

        
        //Eliminar de carrito
        $carritos= Carritos::where('id_user','=',$id)->delete();

        return redirect()->back();
    }

    public function show($id)
    {

        $pedidos = Pedidos::all()->where('id_user','=',$id);
        return view('UsuarioNormal.pedidos',compact('pedidos','id'));
    }
}
