@extends('layouts.main')

@section('pageTitle', "Crear Instruccion")

@section('mainContent')


<form action="{{ url('/instrucciones/')}}" method="post">

@csrf
@include('instrucciones.form',['modo'=>'Crear']);


</form>

@endsection

