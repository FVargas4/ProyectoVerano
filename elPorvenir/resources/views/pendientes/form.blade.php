
<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 responsive-container bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
        <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center">
            <h1>{{($modo)}} Pendiente</h1>
        </h1>
        <hr>
        @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)

                <li> {{$error}}</li>

                @endforeach

            </ul>
        </div>

        @endif
        <div class="container mt">

            <div class="form-group">

                <label for="nombre" class="form-label fs-5 px-0">Nombre<span aria-hidden="true"
                        class="required text-danger">*</span></label>
                <input type="text" placeholder="Ingresa el Nombre" class="form-control" name="nombre"
                    @if($modo=='Editar' || $modo=='Consultar' ) value="{{$pendiente->nombre}}" @else @endif id="nombre"
                    <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <br>

                <div class="mb-3 form-group form-outline">
                    <label for="area_id" class="px-0">Area desde la que se reporta: <span aria-hidden="true" class="required text-danger" >*</span></label>
                    <select class="form-control" id="area_id" name="area_id"<?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                        <option selected>Selecciona a un area</option>
                        @foreach($areasList as $item)
                        <option value="{{$item -> id}}" @if($modo != 'Crear') @if($item->id == $reporte->area_id) selected @else @endif @endif >{{$item -> area}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 form-group form-outline">
                    <label for="fecha_entrega" class="form-label fs-5 px-0">Fecha de Asignación<span
                            aria-hidden="true" class="required text-danger">*</span></label>
                    <input type="date" name="fecha_entrega" id="fecha_entrega"
                        class="form-control @error('fecha_entrega') border border-danger @enderror"
                        @if($modo=='Editar' || $modo=='Consultar' ) value="{{$pendiente->fecha_nacimiento}}" @else @endif
                        <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>

                </div>
                <div class="mb-3 form-group form-outline">
                    <label for="fecha_vencimiento" class="form-label fs-5 px-0">Fecha de Vencimiento<span aria-hidden="true"
                            class="required text-danger">*</span></label>
                    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento"
                        class="form-control @error('fecha_vencimiento') border border-danger @enderror" @if($modo=='Editar'
                        || $modo=='Consultar' ) value="{{$pendiente->fecha_vencimiento}}" @else @endif
                        <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>

                </div>

                <label for="descripcion" class="form-label fs-5 px-0" >Descripcion<span aria-hidden="true"
                            class="required text-danger">*</span></label>
                    <textarea class="form-control" name="descripcion" id="descripcion" height="400rem" @if($modo == 'Editar' || $modo == 'Consultar') value = "{{$pendiente->descripcion}}" @else @endif  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> > </textarea>
            


                @if ($modo != 'Consultar')
                <div class="px-4">

                    <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} datos">

                </div>
                @endif
                <div class="px-4">
                    <a href="{{url('pendientes/')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
                </div>

            </div>

        </div>
    </div>
</div>
