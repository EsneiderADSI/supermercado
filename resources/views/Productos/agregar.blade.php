@extends('layout')
<!-- START CONTENT -->
<!-- @section('stats') @endsection -->

        @section('contenido')
        <!-- CONTENIDO HEREDADO AQUI ADENTRO-->
<div class="container mt-3">
        
        <div class="jumbotron">
            <h1 class="display-4"><i class="fa fa-dropbox" aria-hidden="true"></i> Creación de Productos</h1>
        
    </div>
        <form action="{{route('productos.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label><i class="fa fa-dropbox" aria-hidden="true"></i> Nombre del producto:</label>
                <input class="form-control" id="nameProduct" name="nameProduct">

            </div>
            <div class="form-group">
                <label><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Estado del producto</label>
                <select class="custom-select mr-sm-2" name="productState" id="productState">         
                   <option value='1'>1</option>
                   <option value='2'>2</option>
               </select>
            </div>
            <div class="form-group">
                <label><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> Seleccione el provedor</label>
                <select class="custom-select mr-sm-2" name="provider_idProvider" id="provider_idProvider">         
                   <option value=''>Seleccione</option>
                    @foreach ($provedores as $provedor)
                    <option value="{{$provedor->idProvider}}">{{$provedor->providerName}}</option>
                @endforeach
                    
                </select>
            </div>
            <div class="form-group">
                <label><i class="fa fa-building" aria-hidden="true"></i> Seleccione la empresa</label>
                <select class="custom-select mr-sm-2" name="enterprise_idEnterprise" id="enterprise_idEnterprise">
                    <option value=''>Seleccione</option>
                    @foreach ($empresas as $empresa)
                    <option value="{{$empresa->idEnterprise}}">{{$empresa->enterpriseName}}</option>
                @endforeach
                    
                </select>
            </div>
            <div class="form-group">
                <label><i class="fa fa-cubes" aria-hidden="true"></i> Seleccione el tipo de producto</label>
                <select class="custom-select mr-sm-2" name="productType_idproductType" id="productType_idproductType">
                    <option value=''>Seleccione</option>
                    @foreach ($tiposp as $tipos)
                    <option value="{{$tipos->idPRODUCTType}}">{{$tipos->nameProductType}}</option>
                @endforeach
                </select>
            </div>

            
            <button type="submit" class="btn btn-success">Crear Producto</button>
        </form>
    </div>
        @endsection('contenido')
        
<!-- END CONTENT -->


@section('scripts')

@endsection('scripts')