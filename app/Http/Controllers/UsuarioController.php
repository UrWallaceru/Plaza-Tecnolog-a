<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Negocios;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index($id)
    {
        //home
        $negocios=Negocios::all();
        //$usuario=User::findOrFail($id);
        return view('UsuarioNormal.index', compact('negocios','id') );
        //return $usuario;
    }

    public function loginUser()
    {
        //login
        return view('UsuarioNormal.login');
    }

    public function create()
    {
        //crear
        return view('UsuarioNormal.register');
    }

    public function store(Request $request)
    {
        //
        $usuario = new User;
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('correo');
        $usuario->password = $request->input('password');
        $usuario->tipo = $request->input('tipo');
        $usuario->save();
        return view('UsuarioNormal.login');
    }

    public function verificar(Request $request)
    {
        $email = $request->correo;    
        $pass = $request->password;
        $usuario = User::all();
        
        foreach ($usuario as $usr) {
            if ($email == $usr->email &&  $pass == $usr->password) {
                $id = $usr->id;
                //IF = 1 ... dueño de negocio ELSE Usuario
                if ($usr->tipo == 1) {
                    return redirect()->route('local',$id);
                }else return redirect()->route('inicio',$id);
                //
            }
        }
        return 'No encontrado';//view('UsuarioNormal.login');
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
