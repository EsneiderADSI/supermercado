@extends('layout')
<!-- START CONTENT -->
<!-- @section('stats') @endsection -->

        @section('contenido')
        <!-- CONTENIDO HEREDADO AQUI ADENTRO-->
       <div class="container mt-3">
        
        <div class="jumbotron">
            <h1 class="display-4"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Creación de roles</h1>
        
    </div>
        <form action="{{route('roles.store')}}" method="POST">
			@csrf
            <div class="form-group">
                <label for="roleName"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Nombre del Rol </label>
                <input type="text" class="form-control" id="roleName" name="roleName" class="validate">
            </div>

            <button type="submit" class="btn btn-success">Crear Rol</button>
        </form>
</div>
        @endsection('contenido')
        
<!-- END CONTENT -->


@section('scripts')

@endsection('scripts')