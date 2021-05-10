@extends('layout')
<!-- START CONTENT -->
<!-- @section('stats') @endsection -->

        @section('contenido')
        <!-- CONTENIDO HEREDADO AQUI ADENTRO-->
       <div class="container mt-3">
        
        <div class="jumbotron">
            <h1 class="display-4"><i class="fa fa-building" aria-hidden="true"></i> Creación de Empresas</h1>
        
    </div>
        <form action="{{route('empresas.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="enterpriseName"><i class="fa fa-building" aria-hidden="true"></i> Nombre </label>
                <input type="text" class="form-control" id="enterpriseName" name="enterpriseName">
            </div>
             <div class="form-group">
                <label for="address"><i class="fa fa-address-book" aria-hidden="true"></i> Direccion </label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="phoneNumber"><i class="fa fa-phone" aria-hidden="true"></i> Número teléfonico </label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
            </div>

            <button type="submit" class="btn btn-success">Crear Empresa</button>
        </form>
    </div>
        @endsection('contenido')
        
<!-- END CONTENT -->


@section('scripts')

@endsection('scripts')