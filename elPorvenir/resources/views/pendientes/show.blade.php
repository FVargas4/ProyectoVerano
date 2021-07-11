@extends('layouts.main')
@section('pageTitle', "Consultar Pendiente")

@section('mainContent')



<form action="{{ url('/pendientes/'.$pendiente->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('pendientes.form',['modo'=>'Consultar']);

</form>


@endsection