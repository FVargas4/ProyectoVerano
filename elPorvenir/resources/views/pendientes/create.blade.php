@extends('layouts.main')

@section('mainContent')


<form action="{{ url('/pendientes/')}}" method="post">

@csrf
@include('pendientes.form',['modo'=>'Crear']);


</form>

@endsection

