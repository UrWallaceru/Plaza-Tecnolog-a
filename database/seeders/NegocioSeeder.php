<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Negocios;
use App\Models\Productos;
use App\Models\User;
use App\Models\codigos;
class NegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Genera código Dueño de negocio
        $numCod= new codigos;
        $numCod->codigo = "ABC000001";
        $numCod->save();
        
        $numCod= new codigos;
        $numCod->codigo = "ABC000002";
        $numCod->save();
        
        $numCod= new codigos;
        $numCod->codigo = "ABC000003";
        $numCod->save();

        $numCod= new codigos;
        $numCod->codigo = "ABC000004";
        $numCod->save();

        $numCod= new codigos;
        $numCod->codigo = "ABC000005";
        $numCod->save();

        $numCod= new codigos;
        $numCod->codigo = "ABC000006";
        $numCod->save();


        $usuario1= new User;
        $usuario1->name = "Wallace";
        $usuario1->email = "wallace@gmail.com";
        $usuario1->password = "12345678";
        $usuario1->tipo = "1";
        $usuario1->save();

        $negocio1 = new Negocios;
        $negocio1->nombre = "Local Wallace";
        $negocio1->numLocal = "AC-1";
        $negocio1->user_id = "1";
        $negocio1->save();

        $productos1 = new Productos;
        $productos1->nombre = "Laptop Gamer";
        $productos1->descripcion = "Laptop muy bonita jsjs";
        $productos1->precio = 17000;
        $productos1->id_negocio = "1";
        $productos1->cantidad = "5";
        $productos1->save();

        $productos1 = new Productos;
        $productos1->nombre = "Mouse";
        $productos1->descripcion = "ratón para computadora";
        $productos1->precio = 50;
        $productos1->id_negocio = "1";
        $productos1->cantidad = "30";
        $productos1->save();

        //
        $usuario1= new User;
        $usuario1->name = "María";
        $usuario1->email = "maria@gmail.com";
        $usuario1->password = "12345678";
        $usuario1->tipo = "1";
        $usuario1->save();

        $negocio1 = new Negocios;
        $negocio1->nombre = "Local María";
        $negocio1->numLocal = "AC-2";
        $negocio1->user_id = "2";
        $negocio1->save();

        $productos1 = new Productos;
        $productos1->nombre = "bocinas";
        $productos1->descripcion = "bocinas bonitas de color azul";
        $productos1->precio = "200";
        $productos1->id_negocio = "2";
        $productos1->cantidad = "10";
        $productos1->save();

        //
        $usuario1= new User;
        $usuario1->name = "Pedro";
        $usuario1->email = "pedro@gmail.com";
        $usuario1->password = "12345678";
        $usuario1->tipo = "1";
        $usuario1->save();

        $negocio1 = new Negocios;
        $negocio1->nombre = "Local Pedro";
        $negocio1->numLocal = "AC-3";
        $negocio1->user_id = "3";
        $negocio1->save();

        $productos1 = new Productos;
        $productos1->nombre = "Pulsera inteligente";
        $productos1->descripcion = "Capaz de hacer tus tareas:D";
        $productos1->precio = "800";
        $productos1->id_negocio = "3";
        $productos1->cantidad = "3";
        $productos1->save();

        //
        $usuario1= new User;
        $usuario1->name = "Saul";
        $usuario1->email = "saul@@gmail.com";
        $usuario1->password = "12345678";
        $usuario1->tipo = "1";
        $usuario1->save();

        $negocio1 = new Negocios;
        $negocio1->nombre = "Local Saul";
        $negocio1->numLocal = "AC-4";
        $negocio1->user_id = "4";
        $negocio1->save();

        $productos1 = new Productos;
        $productos1->nombre = "Lampara LED";
        $productos1->descripcion = "Lampara de luz parpadeante";
        $productos1->precio = "90";
        $productos1->id_negocio = "4";
        $productos1->cantidad = "10";
        $productos1->save();

        //
        $usuario1= new User;
        $usuario1->name = "Victor";
        $usuario1->email = "victor@gmail.com";
        $usuario1->password = "12345678";
        $usuario1->tipo = "1";
        $usuario1->save();

        $negocio1 = new Negocios;
        $negocio1->nombre = "Local Victor";
        $negocio1->numLocal = "AC-5";
        $negocio1->user_id = "5";
        $negocio1->save();

        $productos1 = new Productos;
        $productos1->nombre = "Sable de luz";
        $productos1->descripcion = "Replica de sable de luz funcional";
        $productos1->precio = "10000";
        $productos1->id_negocio = "5";
        $productos1->cantidad = "2";
        $productos1->save();
    }
}
