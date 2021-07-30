@extends('layouts.newmain')

@section('pageTitle', "Crear Instruccion")

@section('main')


<form action="{{ url('/instrucciones/')}}" method="post">

@csrf
@include('instrucciones.form',['modo'=>'Crear']);


</form>

@endsection

