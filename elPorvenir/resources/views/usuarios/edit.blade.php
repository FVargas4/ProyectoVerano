@extends('layouts.newmain')

@section('pageTitle', "Editar Usuario")

@section('main')

<form action="{{ url('/usuarios/'.$usuario->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('usuarios.form',['modo'=>'Editar'])

</form>


@endsection