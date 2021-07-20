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

class InstruccionController extends Controller
{
    public function index(){
        $instrucciones = Instruccion::all();
        return view('instrucciones.index', compact('instrucciones'));
    }

    public function create(){
        $prioridades = Prioridad::select('id', 'nombre')->get();
        $usuarios = User::select('id', 'name')->get();
        return view('instrucciones.create', compact('prioridades', 'usuarios'));
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
        $datosInstruccion = request()->except('_token', 'prioridad_id', 'user_id');

        //return response()->json($datosPendiente);
    
        $instruccion = Instruccion::insertGetId($datosInstruccion);

        $prioridad = request('prioridad_id');

        $usuario = request('user_id');

        prioridad_instruccions::insert(['prioridad_id' => $prioridad, 'instruccion_id' => $instruccion]);

        InstruccionUser::insert(['instruccion_id' => $instruccion, 'user_id' => $usuario]);


        return redirect('instrucciones')->with('mensaje','Instrucción registrada con éxito');
    }

    public function show($id){
        $instruccion = Instruccion::findOrFail($id);
        $prioridad = prioridad_instruccions::select('prioridad_id')->where('instruccion_id', '=', $id)->get();
        $usuario = InstruccionUser::select('user_id')->where('instruccion_id','=', $id)->get();
        $prioridades = Prioridad::select('id', 'nombre')->get();
        $usuarios = User::select('id', 'name')->get();
        //dd($prioridad);
        return view('instrucciones.show', compact('prioridades', 'usuarios','instruccion', 'prioridad', 'usuario'));

    }

    public function edit($id){
        $instruccion = Instruccion::findOrFail($id);
        $prioridad = prioridad_instruccions::select('prioridad_id')->where('instruccion_id', '=', $id)->get();
        $usuario = InstruccionUser::select('user_id')->where('instruccion_id','=', $id)->get();
        $prioridades = Prioridad::select('id', 'nombre')->get();
        $usuarios = User::select('id', 'name')->get();
        //dd($prioridad);
        return view('instrucciones.edit', compact('prioridades', 'usuarios','instruccion', 'prioridad', 'usuario'));

    }

    public function update(Request $request, $id){
        
        //dd($request);
        $datosInstruccion = request()->except('_method', '_token', 'prioridad_id', 'user_id');
        Instruccion::where('id', '=', $id)->update($datosInstruccion);

        $prioridad = request('prioridad_id');

        $usuario = request('user_id');

        prioridad_instruccions::where('instruccion_id', '=', $id)->update(array('prioridad_id' => $prioridad));

        InstruccionUser::where('instruccion_id', '=', $id)->update(array('user_id' => $usuario));

        return redirect('instrucciones')->with('mensaje','Instrucción editada con éxito');
    }

    public function destroy($id)
    {
        
        Instruccion::destroy($id);

        return redirect('instrucciones')->with('mensaje','Instruccion eliminada con éxito');
    }

}
