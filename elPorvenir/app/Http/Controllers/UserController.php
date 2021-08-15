<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();

        //dd($usuarios);
        return view('usuarios.index', compact('usuarios'));
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request)
    {

         $campos=[

            'name'=>'required|string',
            'telefono'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|password',

    ];

    $mensaje=[

        'required'=>'El :attribute es requerido'

    ];

    $this->validate($request,$campos,$mensaje);
 
    //
    $datosUsuario = request()->except('_token');

    //return response()->json($datosPendiente);
    
    $user = User::insertGetId($datosUsuario);


    return redirect('usuarios')->with('mensaje','Usuario registrado con éxito');
    }

    public function show($id){
        $usuario = User::findOrFail($id);
        //dd($pendiente);
        return view('usuarios.show', compact('usuario'));

    }

    public function edit($id){
       
        $usuario = User::findOrFail($id);
        //dd($usuario);
        return view('usuarios.edit', compact('usuario'));

    }

    public function update(Request $request, $id){

        $datosUsuario = request()->except('_method', '_token');
        
        $user = User::where('id', '=', $id)->update($datosUsuario);

        return redirect('usuarios')->with('mensaje','Usuario editado con éxito');
    }

    public function destroy($id)
    {
        
        User::destroy($id);

        return redirect('usuarios')->with('mensaje','Usuario eliminado con éxito');
    }
}
