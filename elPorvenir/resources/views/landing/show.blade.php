@extends('layouts.newmain')
@section('pageTitle', "Consultar Pendiente")

@section('mainContent')



<form action="{{ url('/landing/'.$pu) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('landing.form',['modo'=>'Consultar']);

</form>


@endsection