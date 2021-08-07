@extends('layouts.newmain')
@section('pageTitle', "Inicio El Porvenir")
@section('main')
    <div class='bg-white container my-5 p-3 bg-light shadow-sm  bg-body rounded'>
        <div class="d-flex justify-content-start my-3"> 
        </div>

        @if ($pendientes)
            <h1>Tus <a class="titulo" href='pendientes'>Pendientes</a></h1>
            <table class="table table-hover m-3 pb-3" id="tabla">
                <thead>
                        <tr>
                            <th class="text-wrap" scope="col">Nombre</th>
                            <th class="text-wrap" scope="col">Fecha Asignada</th>
                            <th class="text-wrap" scope="col">Fecha Vencimiento</th>
                            <th class="text-wrap" scope="col">Ver más</th>
                        </tr>
                </thead>

                <tbody id = "usuarios">

                    @foreach($pendientes as $item)
                        @php
                            $dateEntrega = date_create($item->fecha_entrega);
                            $dateVencimiento = date_create($item->fecha_vencimiento);

                        @endphp
                        <tr scope="row">
                            <td class="fs-6 text-wrap">{{ $item->nombre }}</td>
                            <td class="fs-6 text-wrap">{{ date_format($dateEntrega, "d/M/Y")}}</td>
                            <td class="fs-6 text-wrap">{{ date_format($dateVencimiento, "d/M/Y")}}</td>
                            <td class="text-center">
                            @if($item->descripcion == '') 
                            @else
                                <a href="pendientes/{{ $item->id}}/show">
                                    <button type="button" class="btn btn-primary my-1 d-flex justify-content-center 
                                    align-items-center">
                                    <i class="bi bi-eye"></i>
                                    </button> 
                                </a>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>

            </table>
            
            @else
                <div>
                    <h4 class="text-center m-3">No hay pendientes disponibles</h4>
                </div>
            @endif
            <div class="m-5 px-5">
                <hr width="800" id="separador">
            </div>
            <h1>Tus <a class="titulo" href='instrucciones'>Instrucciones</a></h1>
                @if ($instrucciones)
                    <table class="table table-hover m-3" id="tabla">

                        <thead>
                            <tr>
                                <th class="text-wrap" scope="col">Nombre</th>
                                <th class="text-wrap" scope="col">Fecha Asignada</th>
                                <th class="text-wrap" scope="col">Fecha Vencimiento</th>
                                <th class="text-wrap" scope="col">Ver más</th>
                            </tr>
                        </thead>
                        <tbody id = "usuarios">

                            @foreach($instrucciones as $item)
                            @php
                                $dateEntrega = date_create($item->fecha_entrega);
                                $dateVencimiento = date_create($item->fecha_vencimiento);

                            @endphp
                            <tr scope="row">
                                <td class="fs-6 text-wrap">{{ $item->nombre }}</td>
                                <td class="fs-6 text-wrap">{{ date_format($dateEntrega, "d/M/Y")}}</td>
                                <td class="fs-6 text-wrap">{{ date_format($dateVencimiento, "d/M/Y")}}</td>
                                <td class="text-center">
                                    @if($item->descripcion == '') 
                                    @else
                                        <a href="instrucciones/{{ $item->id}}/show">
                                            <button type="button" class="btn btn-primary my-1 d-flex justify-content-center 
                                            align-items-center">
                                            <i class="bi bi-eye"></i>
                                            </button> 
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach


                        </tbody>

                    </table>
                @else
                <div>
                    <h4 class="text-center mt-5">No hay instrucciones disponibles</h4>
                </div>
                @endif


        
</div>
@endSection