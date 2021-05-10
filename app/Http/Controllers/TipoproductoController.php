<?php

namespace App\Http\Controllers;

use App\Tipoproducto;
use Illuminate\Http\Request;

class TipoproductoController extends Controller
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
        return view('TipoProducto.agregar');
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
            'nameProductType'         =>  'required',
        ]);

        $form_data = array(
            'nameProductType'        =>   $request->nameProductType,
        );

        Tipoproducto::create($form_data);
        return redirect('/')->with('success', 'Datos guardados correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipoproducto  $tipoproducto
     * @return \Illuminate\Http\Response
     */
    public function show(Tipoproducto $tipoproducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipoproducto  $tipoproducto
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipoproducto $tipoproducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipoproducto  $tipoproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoproducto $tipoproducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipoproducto  $tipoproducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipoproducto $tipoproducto)
    {
        //
    }
}
