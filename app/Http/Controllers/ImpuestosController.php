<?php

namespace App\Http\Controllers;

use App\Impuestos;
use Illuminate\Http\Request;

class ImpuestosController extends Controller
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
        return view('Impuestos.agregar');
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
            'taxName'         =>  'required',
        ]);

        $form_data = array(
            'taxName'        =>   $request->taxName,
        );

        Impuestos::create($form_data);
        return redirect('/')->with('success', 'Datos guardados correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function show(Impuestos $impuestos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function edit(Impuestos $impuestos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impuestos $impuestos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Impuestos $impuestos)
    {
        //
    }
}
