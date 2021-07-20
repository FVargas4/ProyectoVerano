@extends('layouts.main')
@section('pageTitle', "Consultar Instrucción")

@section('mainContent')



<form action="{{ url('/instrucciones/'.$instruccion->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('instrucciones.form',['modo'=>'Consultar']);

</form>


@endsection