@extends('layouts.newmain')

@section('pageTitle', "Editar Instrucción")

@section('main')

<form action="{{ url('/instrucciones/'.$instruccion->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('instrucciones.form',['modo'=>'Editar']);

</form>


@endsection