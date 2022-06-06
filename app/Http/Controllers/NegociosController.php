<?php

namespace App\Http\Controllers;

use App\Models\Negocios;
use App\Models\Productos;
use Illuminate\Http\Request;

class NegociosController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($idLocal,$id)
    {
        //Mostrar Productos
        $negocio=Negocios::findOrFail($idLocal);
        $productos = Productos::where('id_negocio', $idLocal)->get();
        return view('Negocio.productos',compact('negocio','productos','id'));
    }

    public function edit(Negocios $negocios)
    {
        //
    }

    public function update(Request $request, Negocios $negocios)
    {
        //
    }

    public function destroy(Negocios $negocios)
    {
        //
    }
}
