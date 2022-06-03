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

    public function show($id)
    {
        //Mostrar Productos
        $negocio=Negocios::findOrFail($id);
        $productos = Productos::where('id_negocio', $id)->get();
        return view('Negocio.productos',compact('negocio','productos'));
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
