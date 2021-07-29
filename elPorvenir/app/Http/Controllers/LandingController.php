<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruccion;
use App\Models\Prioridad;
use App\Models\User;
use App\Models\prioridad_pendientes;
use App\Models\PendientesUsers;
use App\Models\InstruccionUser;
use App\Models\prioridad_instruccions;
use App\Models\Pendiente;

class LandingController extends Controller
{
    function home () {
    
        return view("landing.home");
    }

    function home2 (){
        $usuario = '1';
        //Obtener id del pendiente usando la id del usuario en el login
        $pu = PendientesUsers::select('pendiente_id')->where('user_id','=', $usuario)->get();
        //Obtener todo el pendiente con su id 
        $pendiente = Pendiente::findOrFail($pu);
        //Obtener la prioridad del pendiente
        $prioridad = prioridad_pendientes::select('prioridad_id')->where('pendiente_id', '=', $usuario)->get();
        //Obtener la lista de prioridades del sistema
        $prioridades = Prioridad::select('id', 'nombre')->get();
        //Obtener la lista de usuarios en el sistema
        $usuarios = User::select('id', 'name')->get();

        /*Pruebas*/
        //dd($usuarios);

        /*FinPruebas*/
        return view('landing.show', compact('pu','prioridades', 'usuarios','pendiente', 'prioridad', 'usuario'));
    }
}
