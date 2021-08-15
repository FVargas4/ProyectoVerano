<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 responsive-container bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
        <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center">
            <h1>{{($modo)}} Usuario</h1>
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
                <div class="row">
                    
                    <div class='col'>
                        <label for="nombre" class="form-label fs-5 px-0">Ingresa el nombre del usuario<span aria-hidden="true"
                            class="required text-danger">*</span></label>
                        <input type="text" placeholder="Ingresa el Nombre" class="form-control" name="name"
                            @if($modo=='Editar' || $modo=='Consultar' ) value="{{$usuario->name}}" @else @endif id="name"
                            <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                    </div>
                    <div class='col'>
                            <label for="telefono" class="form-label fs-5 px-0"">Ingresa el telefono del usuario <span aria-hidden="true" 
                            class="required text-danger" >*</span></label>
                            <input type="text" placeholder="1234567890" class="form-control" name="telefono"
                            @if($modo=='Editar' || $modo=='Consultar' ) value="{{$usuario->telefono}}" @else @endif id="telefono"
                            <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                    </div>
                </div>
                <div class="row">
                    <div class='col'>
                        <div class="mb-3 form-group form-outline">
                            <label for="email" class="form-label fs-5 px-0">Ingresa el correo electronico del usuario <span aria-hidden="true" 
                            class="required text-danger" >*</span></label>
                            <input type="text" placeholder="ejemplo@correo.com" class="form-control" name="email"
                            @if($modo=='Editar' || $modo=='Consultar' ) value="{{$usuario->email}}" @else @endif id="email"
                            <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                        </div>
                    </div>
                    
                    <div class='col'>
                        <div class="mb-3 form-group form-outline">
                            <label for="password" class="form-label fs-5 px-0">Ingresa la contraseña del usuario <span aria-hidden="true" 
                            class="required text-danger" >*</span></label>
                            <input type="password" placeholder="Ingrese su contraseña" class="form-control" name="password"
                            @if($modo=='Editar' || $modo=='Consultar' ) value="{{$usuario->password}}" @else @endif id="password"
                            <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                        </div>
                    </div>
                </div>
                    <div class='row'>
                        <div class='col'>
                            <div class="px-4">
                                <a href="{{url('usuarios/')}}" class="btn btn-outline-danger w-100 mt-4">Regresar</a>
                            </div>
                        </div>
                        @if ($modo != 'Consultar')
                        
                            <div class="col">
                                <div class="px-4">

                                    <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} usuario">

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
