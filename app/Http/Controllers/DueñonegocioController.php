<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Negocios;
use App\Models\Productos;
use App\Models\codigos;

class DueñonegocioController extends Controller
{
    //
    public function show()
    {
        
    }

    public function index($id)
    {
        //home
        //Mostrar Productos
        $negocio=Negocios::findOrFail($id);
        $productos = Productos::where('id_negocio', $id)->get();
        return view('DueñoNegocio.index',compact('negocio','productos'));
        
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
                $codNegocio->save();
                return view('UsuarioNormal.login');
            }
        }
        return redirect()->back();

        
        
        
    }

    public function verificar(Request $request)
    {
        
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
        
}
