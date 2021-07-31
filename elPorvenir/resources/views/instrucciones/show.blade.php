@extends('layouts.newmain')
@section('pageTitle', "Consultar Instrucción")

@section('main')



<form action="{{ url('/instrucciones/'.$instruccion->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('instrucciones.form',['modo'=>'Consultar'])

</form>


@endsection