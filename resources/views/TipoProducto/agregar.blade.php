@extends('layout')
<!-- START CONTENT -->
<!-- @section('stats') @endsection -->

        @section('contenido')
        <!-- CONTENIDO HEREDADO AQUI ADENTRO-->
            <div class="container mt-3">
        
        <div class="jumbotron">
            <h1 class="display-4"><i class="fa fa-cube" aria-hidden="true"></i> Creación de tipos de Productos</h1>
        
    </div>
        <form action="{{route('tipoproductos.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1"><i class="fa fa-cube" aria-hidden="true"></i> Tipo de producto </label>
                <input type="text" class="form-control" id="nameProductType" name="nameProductType" required>
            </div>
             

            <button type="submit" class="btn btn-success">Crear tipo de producto</button>
        </form>

    </div>

        @endsection('contenido')
<!-- END CONTENT -->


@section('scripts')

@endsection('scripts')