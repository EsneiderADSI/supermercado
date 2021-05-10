@extends('layout')
<!-- START CONTENT -->
<!-- @section('stats') @endsection -->

        @section('contenido')
        <!-- CONTENIDO HEREDADO AQUI ADENTRO-->
            <div class="container mt-3">
        
        <div class="jumbotron">
            <h1 class="display-4"><i class="fa fa-sign-language" aria-hidden="true"></i> Creación de Proveedores</h1>
        
    </div>
        <form action="{{route('provedores.store')}}" method="POST">
			@csrf
            <div class="form-group">
                <label for="providerName"><i class="fa fa-sign-language" aria-hidden="true"></i> Nombre </label>
                <input type="text" class="form-control" id="providerName" name="providerName" required>
            </div>
             <div class="form-group">
                <label for="phoneNumber"><i class="fa fa-phone" aria-hidden="true"></i> Numero teléfonico</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
            </div>

            <button type="submit" class="btn btn-success">Crear Proveedor</button>
        </form>
    </div>

        @endsection('contenido')
<!-- END CONTENT -->


@section('scripts')

@endsection('scripts')