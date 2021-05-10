<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link REL=StyleSheet href="{{asset('css/style.css')}}" type="text/css" media=screen>
    <link REL=StyleSheet href="{{asset('css/jumm.css')}}" type="text/css" media=screen>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/2788787b36.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{asset('image/215846.png')}}" sizes="64x64">
    <style>
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route ('layout')}}">
            <img src="{{asset('image/215846.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" /> Supermercado
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="ventas.php">Ventas </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crear personas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route ('roles.create')}}">Crear rol</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route ('personas.create')}}">Personas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crear productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route ('provedores.create')}}">Crear proveedor</a>
                        <a class="dropdown-item" href="{{route ('tipoproductos.create')}}">Crear tipo de producto</a>
                        <a class="dropdown-item" href="{{route ('empresas.create')}}">Crear empresa</a>
                        <a class="dropdown-item" href="{{route ('impuestos.create')}}">Crear impuesto de un producto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route ('productos.create')}}">Producto</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        @section('stats')



        <div class="jumbotron">
            <h1 class="display-4">Bienvenido</h1>
            <p class="lead">
                Curso de programación orientada a servicios
            </p>
            <hr class="my-4" />
            <p>
                Desarrollo de una aplicación para la gestión de ventas de un supermercado
            </p>
            <div class="card-panel teal grey lighten-5" style="width: 100%;">
                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
  <h4 style="font-size: 14px;">
            {{ $message }}
        
    </h4>
</div>
@else
@endif

    
</div>

        </div>
        @show

        @yield('contenido')
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('css/jummjs.js')}}"></script>
    @yield('scripts')
</body>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>DESARROLLO</h6>
                <p class="text-justify">UNIVERSIDAD SANTO TOMAS DE TUNJA <i>Desarrollo orientado a servicios </i>Estudiantes: Brayan Alberto Castellanos Bernal, Moisés David Villalba Contreras </p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Herramientas </h6>
                <ul class="footer-links">
                    <li><a href="">Microsoft Azure</a></li>
                    <li><a href="">Mobaxterm</a></li>
                    <li><a href="">Html</a></li>
                    <li><a href="">CSS</a></li>

                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>REFERENCIAS</h6>
                <ul class="footer-links">
                    <li><a href="">Boostrap</a></li>
                    <li><a href="">Scanfcode</a></li>

                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                    <a href="#">YOP</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">

                <ul class="social-icons">


                </ul>
            </div>
        </div>
    </div>
</footer>

</html>