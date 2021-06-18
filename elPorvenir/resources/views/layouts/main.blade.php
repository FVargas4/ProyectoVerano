<!DOCTYPE html>
<html>
<!-- Required meta tags -->
<meta charset="utf-8">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle')</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{ url('css/main.css')}}">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        {{-- iconos de google --}}
        <link rel="stylesheet" href="{{ asset('css/material-icons.min.css') }}">
        <!----Animaciones ----> 
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    

        <!-- Prueba-->

        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <!-- bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- Google Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Font awesome-->
        <script src="https://kit.fontawesome.com/76fa277871.js" crossorigin="anonymous"></script>
    </head>

    <body class='bg-dark'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-0 shadow-sm">
            <a class="navbar-brand mx-3" href="{{url('/main')}}">
                <img src="{{asset('img/logoPEP.JPG')}}" class="img-fluid" alt="cuadro responsive" width="80"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target" aria-controls="#collapse_target" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item px-2">
                        <a class="nav-link " href="{{url('/')}}">Pendientes</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link " href="{{url('/')}}">Instrucciones</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="https://drive.google.com/drive/u/2/folders/15ooSk6lyx34iuYV2k-WEvrinTOLzwtrQ" target='_blank'>Acceder a Drive</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link " href="{{url('/')}}">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('upContent')
        @yield('mainContent')
    </body>
    <footer>

    </footer>
     <!-- JQuery -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
        AOS.init();
        </script>

