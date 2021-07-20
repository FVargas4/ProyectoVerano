@extends('layouts.main')

@section('pageTitle', "Editar Instrucción")

@section('mainContent')

<form action="{{ url('/instrucciones/'.$instruccion->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('instrucciones.form',['modo'=>'Editar']);

</form>


@endsection