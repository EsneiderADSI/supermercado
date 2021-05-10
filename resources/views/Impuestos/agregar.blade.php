@extends('layout')
<!-- START CONTENT -->
<!-- @section('stats') @endsection -->

        @section('contenido')
        <!-- CONTENIDO HEREDADO AQUI ADENTRO-->
       <div class="container mt-3">
        
        <div class="jumbotron">
            <h1 class="display-4"><i class="fa fa-money" aria-hidden="true"></i> Creación de Impuestos</h1>
        
    </div>
        <form action="{{route('impuestos.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1"><i class="fa fa-money" aria-hidden="true"></i> Nombre del Impuesto </label>
                <input type="text" class="form-control" id="taxName" name="taxName" required>
            </div>


            <button type="submit" class="btn btn-success">Crear Impuesto</button>
        </form>
    </div>
        @endsection('contenido')
        
<!-- END CONTENT -->


@section('scripts')

@endsection('scripts')