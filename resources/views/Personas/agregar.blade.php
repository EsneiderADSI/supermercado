@extends('layout')
<!-- START CONTENT -->
<!-- @section('stats') @endsection -->

        @section('contenido')
        <!-- CONTENIDO HEREDADO AQUI ADENTRO-->
<div class="container mt-3">
        
        <div class="jumbotron">
            <h1 class="display-4">Creacion de personas</h1>
        
    </div>
        <form action="{{route('personas.store')}}" method="POST">
@csrf
            <div class="form-group">
    <label for="Role_idRole">Rol</label>
    <select class="form-control" name="Role_idRole" id="Role_idRole">
      <option value=''>Seleccione un Rol</option>
      @foreach ($roles as $rol)
                    <option value="{{$rol->idRole}}">{{$rol->roleName}}</option>
                @endforeach
                    
    </select>
  </div>
             <div class="form-group">
                <label for="documentPerson">Documento </label>
                <input type="text" class="form-control" id="documentPerson" name="documentPerson">
            </div>

            <button type="submit" class="btn btn-success">Crear Persona</button>
        </form>
    </div>
        @endsection('contenido')
        
<!-- END CONTENT -->


@section('scripts')

@endsection('scripts')