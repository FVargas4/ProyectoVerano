<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
    <body>
        <div id="sidebar">
            <div class="toggle-btn">
                <span>&#9776</span>
            </div>
            <ul>
                <li>
                    <img src="{{asset('img/logoPEP.JPG')}}" alt="logo" class='logo'>
                </li>
                <a class="titulo" href="{{url('/')}}"><li>Inicio</li></a>
                <a class="titulo" href="{{url('/pendientes')}}"><li>Pendientes</li></a>
                <a class="titulo" href="{{url('/instrucciones')}}"><li>Instrucciones</li></a>
            </ul>
            <ul id="down_option">
                <a><li>Cerrar sesión</li></a>
            </ul>
        </div>
        <div id="main" class='container mt-5'>
            @yield('main')
        </div>
        
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
    </body>
</html>
