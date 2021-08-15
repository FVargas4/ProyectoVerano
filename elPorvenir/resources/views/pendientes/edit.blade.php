@extends('layouts.newmain')

@section('pageTitle', "Editar Pendiente")

@section('main')

<form action="{{ url('/pendientes/'.$pendiente->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('pendientes.form',['modo'=>'Editar'])

</form>


@endsection