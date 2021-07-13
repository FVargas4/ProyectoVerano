<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendiente;
use App\Models\Prioridad;
use App\Models\User;
use App\Models\prioridad_pendientes;
use App\Models\PendientesUsers;

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
            'fecha_entrega'=>'required|date',
            'fecha_vencimiento'=>'required|date',
            'prioridad_id'=>'required|numeric',
            'user_id'=>'required|numeric',
            
            


    ];

    $mensaje=[

        'required'=>'El :attribute es requerido'

    ];

    $this->validate($request,$campos,$mensaje);
 
    //
    $datosPendiente = request()->except('_token', 'prioridad_id', 'user_id');

    //return response()->json($datosPendiente);
    
    $pendiente = Pendiente::insertGetId($datosPendiente);

    $prioridad = request('prioridad_id');

    $usuario = request('user_id');

    prioridad_pendientes::insert(['prioridad_id' => $prioridad, 'pendiente_id' => $pendiente]);

    PendientesUsers::insert(['pendiente_id' => $pendiente, 'user_id' => $usuario]);


    return redirect('pendientes')->with('mensaje','Pendiente registrado con éxito');
    }

    public function show($id){
        $pendiente = Pendiente::findOrFail($id);
        $prioridad = prioridad_pendientes::select('prioridad_id')->where('pendiente_id', '=', $id)->get();
        $usuario = PendientesUsers::select('user_id')->where('pendiente_id','=', $id)->get();
        $prioridades = Prioridad::select('id', 'nombre')->get();
        $usuarios = User::select('id', 'name')->get();
        //dd($pendiente);
        return view('pendientes.show', compact('prioridades', 'usuarios','pendiente', 'prioridad', 'usuario'));

    }

    public function edit($id){
        $pendiente = Pendiente::findOrFail($id);
        $prioridad = prioridad_pendientes::select('prioridad_id')->where('pendiente_id', '=', $id)->get();
        $usuario = PendientesUsers::select('user_id')->where('pendiente_id','=', $id)->get();
        $prioridades = Prioridad::select('id', 'nombre')->get();
        $usuarios = User::select('id', 'name')->get();
        //dd($usuario);
        return view('pendientes.edit', compact('prioridades', 'usuarios','pendiente', 'prioridad', 'usuario'));

    }

    public function update(Request $request, $id){
        
        $datosPendiente = request()->except('_method', '_token', 'prioridad_id', 'user_id');
        Pendiente::where('id', '=', $id)->update($datosPendiente);

        $prioridad = request('prioridad_id');

        $usuario = request('user_id');

        prioridad_pendientes::where('pendiente_id', '=', $id)->update(array('prioridad_id' => $prioridad));

        PendientesUsers::where('pendiente_id', '=', $id)->update(array('user_id' => $usuario));

        return redirect('pendientes')->with('mensaje','Pendiente editado con éxito');
    }

    public function destroy($id)
    {
        
        Pendiente::destroy($id);

        return redirect('pendientes')->with('mensaje','Pendiente eliminado con éxito');
    }

}
