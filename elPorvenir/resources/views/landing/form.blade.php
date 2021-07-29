

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

                <label for="nombre" class="form-label fs-5 px-0">Ingresa el titulo del pendiente<span aria-hidden="true"
                        class="required text-danger">*</span></label>
                <input type="text" placeholder="Ingresa el Nombre" class="form-control" name="nombre"
                    @if($modo=='Editar' || $modo=='Consultar' ) value="{{$pendiente[0]->nombre}}" @else @endif id="nombre"
                    <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <br>
                <div class="row">
                <div class='col'>
                <div class="mb-3 form-group form-outline">
                    <label for="prioridad_id" class="px-0">Selecciona el nivel de prioridad: <span aria-hidden="true" class="required text-danger" >*</span></label>
                    <select class="form-control" id="prioridad_id" name="prioridad_id"<?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                        <option selected>Selecciona a una prioridad</option>
                        @foreach($prioridades as $item)
                            <option value="{{$item -> id}}" @if($modo != 'Crear') @if($prioridad[0]->prioridad_id == $item->id) selected @else @endif @endif>{{$item -> nombre}}</option>

                        @endforeach
                        
                    </select>
                </div>
                </div>
                
                <div class='col'>
                <div class="mb-3 form-group form-outline">
                    <label for="user_id" class="px-0">Selecciona un usuario a quien se le asignara el pendiente: <span aria-hidden="true" class="required text-danger" >*</span></label>
                    <select class="form-control" id="user_id" name="user_id"<?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                        <option selected>Selecciona a un usuario</option>
                        @foreach($usuarios as $item)
                            <option value="{{$item -> id}}" @if($modo != 'Crear') @if($item->id == $usuario) selected @else @endif @endif>{{$item -> name}}</option>

                        @endforeach
                        
                    </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class='col'>
                <div class="m-3 form-group form-outline">
                    <label for="fecha_entrega" class="form-label fs-5 px-0">Fecha de Asignación<span
                            aria-hidden="true" class="required text-danger">*</span></label>
                    <input type="date" name="fecha_entrega" id="fecha_entrega"
                        class="form-control @error('fecha_entrega') border border-danger @enderror"
                        @if($modo=='Editar' || $modo=='Consultar' ) value="{{$pendiente[0]->fecha_entrega}}" @else @endif
                        <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>

                </div>
                </div>
                
                <div class='col'>
                <div class="m-3 form-group form-outline">
                    <label for="fecha_vencimiento" class="form-label fs-5 px-0">Fecha de Vencimiento<span aria-hidden="true"
                            class="required text-danger">*</span></label>
                    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento"
                        class="form-control @error('fecha_vencimiento') border border-danger @enderror" @if($modo=='Editar'
                        || $modo=='Consultar' ) value="{{$pendiente[0]->fecha_vencimiento}}" @else @endif
                        <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>

                </div>
                </div>
                <label for="descripcion" class="form-label fs-5 px-0" >Descripcion<span aria-hidden="true"
                            class="required text-danger">*</span></label>
                    <textarea class="form-control" name="descripcion" id="descripcion" height="400rem" @if ($modo == 'Consultar') disabled @endif> 
                        @if($modo=='Editar' || $modo=='Consultar') {{$pendiente[0]->descripcion}} @endif </textarea>
                    <div class='row'>
                        <div class='col'>
                            <div class="px-4">
                                <a href="{{url('pendientes/')}}" class="btn btn-outline-danger w-100 mt-4">Regresar</a>
                            </div>
                        </div>
                        @if ($modo != 'Consultar')
                        
                            <div class="col">
                                <div class="px-4">

                                    <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} pendientes">

                                </div>
                            </div>
                        @else
                            <div class="col">

                            </div>
                        @endif
                        
                        
                    </div>
            </div>

        </div>
    </div>
</div>
