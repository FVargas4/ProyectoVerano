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

        //Obtener id del usuario
        $usuario = '1';
        //Obtener id del pendiente usando la id del usuario en el login
        $pu = PendientesUsers::select('pendiente_id')->where('user_id','=', $usuario)->get();
        //Obtener todo el pendiente con su id 
        $pendientes = Pendiente::getPendientes($pu);
        //Obtener la prioridad del pendiente
        $prioridad = prioridad_pendientes::select('prioridad_id')->where('pendiente_id', '=', $usuario)->get();
        //Obtener la lista de prioridades del sistema
        $prioridades = Prioridad::select('id', 'nombre')->get();
        //Obtener la lista de usuarios en el sistema
        $usuarios = User::select('id', 'name')->get();
        //Obtener la prioridad de la instrucción
        $iu = InstruccionUser::select('instruccion_id')->where('user_id', '=', $usuario)->get();
        //Obtener id de la instruccion usando la id del usuario en el login
        $instrucciones = Instruccion::getInstrucciones($iu);
        
        

        /*Pruebas*/
        //dd($instrucciones);

        /*FinPruebas*/
        return view('landing.index', compact('pu','prioridades', 'usuarios','pendientes', 'prioridad', 'iu', 'instrucciones', 'usuario'));
    }
}
