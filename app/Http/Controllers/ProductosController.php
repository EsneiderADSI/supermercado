<?php

namespace App\Http\Controllers;

use App\Productos;
use App\Provedor;
use App\Empresas;
use App\Tipoproducto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provedores = Provedor::all();
        $empresas = Empresas::all();
        $tiposp = Tipoproducto::all();
        return view('Productos.agregar', compact('empresas', 'provedores', 'tiposp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameProduct'                       =>  'required',
            'productState'                      =>  'required',
            'provider_idProvider'               =>  'required',
            'enterprise_idEnterprise'           =>  'required',
            'productType_idproductType'         =>  'required',
        ]);

        $form_data = array(
            'nameProduct'                     =>   $request->nameProduct,
            'productState'                    =>   $request->productState,
            'provider_idProvider'             =>   $request->provider_idProvider,
            'enterprise_idEnterprise'         =>   $request->enterprise_idEnterprise,
            'productType_idproductType'       =>   $request->productType_idproductType,
        );

        Productos::create($form_data);
        return redirect('/')->with('success', 'Datos guardados correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
