@extends('layouts.newmain')
@section('pageTitle', "Usuarios")
@section('main')
@if(Session::has('mensaje'))
<div class="container">

    <div class="alert alert-success alert-dismissible mt-4" role="alert">
        {{ Session::get('mensaje')}}
        <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="btn pull-right">&times;</span>
        </button>
    </div>
</div>
@endif



    <div class='bg-white container my-5 p-3 bg-light shadow-sm  bg-body rounded'>
        <div class="d-flex justify-content-start my-3"> 
        </div>
        <h1 class='text-center'>Usuarios</h1>
            <div class="table-responsive">
            <div class="table-responsive">    
                <br>

        <div class="d-flex justify-content-between align-items-center border-bottom my-3" id="tabla">
            <div class="me-auto p-2">
                <h1 class="text-left fs-4">Lista de usuarios</h1>
            </div>
            <div class="p-2">

                <a href="{{url('usuarios/create')}}" class="btn btn-success ">
                    <button type="button" class="btn btn-success m-0 p-0 d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    </button>
                </a>

            </div>
        </div>
    
        @if ($usuarios->count())
        <table class="table table-hover px-3" id="tabla">

            <thead>
                <tr>
                    <th class="text-wrap" scope="col">Nombre</th>
                    <th class="text-wrap" scope="col">Correo Electronico</th>
                    <th class="text-wrap" scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody id = "usuarios">

                @foreach($usuarios as $item)
                <tr scope="row">
                    <td class="fs-6 text-wrap">{{ $item->name }}</td>
                    <td class="fs-6 text-wrap">{{ $item->email}}</td>
                    <td class="fs-6 text-wrap">{{$item->telefono }}</td>



                    <td>
                        <a href="{{ url('/usuarios/'.$item->id.'/show ') }}">
                            <button type="button"
                                class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-eye"></i>
                            </button>
                        </a>

                        <a href="{{ url('/usuarios/'.$item->id.'/edit') }}">
                            <button type="button"
                                class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </a>

                        <form action="{{ url('/usuarios/'.$item->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}

                            <button type="button" data-toggle="modal" data-target="#exampleModal{{$item->id}}"
                                class="btn btn-danger my-1 d-flex justify-content-center align-items-center"
                                value="Borrar"><i class="bi bi-trash"></i>

                            </button>

                            <!-- Modal usuarios-->
                            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Eliminar</button>



                                        </div>
                                    </div>

                                </div>
                            </div>


                        </form>

                    </td>
                </tr>
                @endforeach


            </tbody>

        </table>
        @else
        <div>
            <h4 class="text-center my-3">No hay usuarios disponibles</h4>
        </div>
        @endif
        </div>

        </div>
    </div>
@endSection