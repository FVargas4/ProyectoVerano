@extends('layouts.main')

@section('pageTitle', "Crear Pendiente")

@section('mainContent')


<form action="{{ url('/pendientes/')}}" method="post">

@csrf
@include('pendientes.form',['modo'=>'Crear']);


</form>

@endsection

