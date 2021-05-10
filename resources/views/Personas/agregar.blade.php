@extends('layout')
<!-- START CONTENT -->
<!-- @section('stats') @endsection -->

        @section('contenido')
        <!-- CONTENIDO HEREDADO AQUI ADENTRO-->
<div class="container mt-3">
        
        <div class="jumbotron">
            <h1 class="display-4"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Creación de personas</h1>
        
    </div>
        <form action="{{route('personas.store')}}" method="POST">
@csrf
            <div class="form-group">
    <label for="Role_idRole"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Rol:</label>
    <select class="custom-select mr-sm-2" name="Role_idRole" id="Role_idRole" required>
      <option value=''>Seleccione un Rol</option>
      @foreach ($roles as $rol)
                    <option value="{{$rol->idRole}}">{{$rol->roleName}}</option>
                @endforeach
                    
    </select>
  </div>
             <div class="form-group">
                <label for="documentPerson"><i class="fas fa-address-card"></i> Documento: </label>
                <input type="number" class="form-control" id="documentPerson" name="documentPerson" required>
            </div>

            <button type="submit" class="btn btn-success">Crear Persona</button>
        </form>
    </div>
        @endsection('contenido')
        
<!-- END CONTENT -->


@section('scripts')

@endsection('scripts')