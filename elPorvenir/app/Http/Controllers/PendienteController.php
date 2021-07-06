<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendiente;
use App\Models\Prioridad;
use App\Models\User;

class PendienteController extends Controller
{
    public function index(){
        $pendientes = pendiente::all();
        return view('pendientes.index', compact('pendientes'));
    }

    public function create(){
        $prioridades = Prioridad::select('id', 'nombre')->get();
        $usuarios = User::select('id', 'name')->get();
        return view('pendientes.create', compact('prioridades', 'usuarios'));
    }

    public function store(Request $request)
    {

         $campos=[

            'nombre'=>'required|string',
            'telefono'=>'required|int',
            'fecha_entrega'=>'required|date',
            'fecha_vencimiento'=>'required|date',

    ];

    $mensaje=[

        'required'=>'El :attribute es requerido'

    ];

    $this->validate($request,$campos,$mensaje);


 
    //
    $datosPendiente = request()->except('_token');

    //return response()->json($datosPendiente);
    
    Pendiente::insert($datosPendiente);

    return redirect('pendientes')->with('mensaje','Pendiente registrado con éxito');
    }

}
