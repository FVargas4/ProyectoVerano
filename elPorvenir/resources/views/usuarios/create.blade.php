@extends('layouts.newmain')

@section('pageTitle', "Crear Usuario")

@section('main')


<form action="{{ url('/usuarios/')}}" method="post">

@csrf
@include('usuarios.form',['modo'=>'Crear'])


</form>

@endsection

