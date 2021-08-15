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
    public function getColor($prioridad) {
        switch ($prioridad){
            case 1:
                return 'FF0000';
            case 2:
                return 'FFFF00';
            case 3:
                return '00FF00';
        }
    }

    public function home2 (){

        //Obtener id del usuario
        $usuario = '1';
        //Obtener id del pendiente usando la id del usuario en el login
        $pu = PendientesUsers::select('pendiente_id')->where('user_id','=', $usuario)->get();
        //Obtener todo el pendiente con su id 
        $pendientes = Pendiente::getPendientes($pu);
        //Obtener la id de la instrucción
        $iu = InstruccionUser::select('instruccion_id')->where('user_id', '=', $usuario)->get();
        //Obtener id de la instruccion usando la id del usuario en el login
        $instrucciones = Instruccion::getInstrucciones($iu);
        //Obtener la prioridad del pendiente
        $prioridad = prioridad_pendientes::select('prioridad_id')->where('pendiente_id', '=', $pu[0]->pendiente_id)->get();
        //Obtener la prioridad del pendiente
        $prioridadI = prioridad_instruccions::select('prioridad_id')->where('instruccion_id', '=', 
            $iu[0]->instruccion_id)->get();

        //Obtener la lista de usuarios (nombre y id) en el sistema
        $usuarios = User::select('id', 'name')->get();
        //Obtener el color de la prioridad del pendiente en base a la clave de la prioridad
        switch($prioridad[0]->prioridad_id){
            case(1):
                //Prioridad alta = Rojo
                $colorPendiente = 'FF0000';
            case(2):
                //Prioridad media = Amarillo
                $colorPendiente = 'FFFF00';
            case(3):
                //Prioridad baja = Verde
                $colorPendiente = '00FF00';
        }
        //Obtener el color de la prioridad de la instrucción en base a la clave de la prioridad
        switch($prioridadI[0]->prioridad_id){
            case('1'):
                //Prioridad alta = Rojo
                $colorInstruccion = 'FF0000';
            case('2'):
                //Prioridad media = Amarillo
                $colorInstruccion = 'FFFF00';
            case('3'):
                //Prioridad baja = Verde
                $colorInstruccion = '00FF00';
        }
        /*Pruebas*/
        //dd($user);

        /*FinPruebas*/
        return view('landing.index', 
        compact('usuario', 'pu', 'pendientes', 'iu', 'instrucciones', 'prioridad', 'prioridadI', 
        'colorPendiente', 'colorInstruccion','usuarios'));
    }
}
