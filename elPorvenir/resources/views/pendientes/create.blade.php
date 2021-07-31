@extends('layouts.newmain')

@section('pageTitle', "Crear Pendiente")

@section('main')


<form action="{{ url('/pendientes/')}}" method="post">

@csrf
@include('pendientes.form',['modo'=>'Crear']);


</form>

@endsection

