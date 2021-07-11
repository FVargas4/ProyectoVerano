@extends('layouts.main')

@section('pageTitle', "Editar Pendiente")

@section('mainContent')

<form action="{{ url('/pendientes/'.$pendiente->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('pendientes.form',['modo'=>'Editar']);

</form>


@endsection