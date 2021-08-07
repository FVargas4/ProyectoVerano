<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle')</title></head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{ url('css/newmain.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle')</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        {{-- iconos de google --}}
        <link rel="stylesheet" href="{{ url('css/material-icons.min.css') }}">
    
    
    <body id="body">
        <div id="sidebar">
            <div class="toggle-btn">
                <span>&#9776</span>
            </div>
            <div id="opciones">
                <ul>
                    <li>
                        <img src="{{asset('img/logoPEP.JPG')}}" alt="logo" class='logo'>
                    </li>
                    <a class="titulo" href="{{url('/')}}"><li>Inicio</li></a>
                    <a class="titulo" href="{{url('/pendientes')}}"><li>Pendientes</li></a>
                    <a class="titulo" href="{{url('/instrucciones')}}"><li>Instrucciones</li></a>
                </ul>
                <ul id="down_option">
                    <form method="POST">
                    <a href="{{url('/logout')}}"><li>Cerrar sesión</li></a>
                    </form>
                </ul>
            </div>
        </div>
        <div id="main" class='container mt-5'>
            @yield('upContent')
            @yield('main')
        </div>
 
    </body>

           
    <script type='text/javascript'>
            const btnToggle = document.querySelector('.toggle-btn');

            btnToggle.addEventListener('click', function () {
            console.log('clik')
            document.getElementById('sidebar').classList.toggle('active');
            console.log(document.getElementById('sidebar'))
            document.getElementById('main').classList.toggle('active');
            console.log(document.getElementById('main'))
            document.getElementById('mainTitle').classList.toggle('active');
            console.log(document.getElementById('mainTitle'))
            });
    </script>

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
</html>
