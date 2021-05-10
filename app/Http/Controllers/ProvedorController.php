<?php

namespace App\Http\Controllers;

use App\Provedor;
use Illuminate\Http\Request;

class ProvedorController extends Controller
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
        return view('Provedor.agregar');
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
            'phoneNumber'         =>  'required',
            'providerName'         =>  'required',
        ]);

        $form_data = array(
            'phoneNumber'        =>   $request->phoneNumber,
            'providerName'        =>   $request->providerName,
        );

        Provedor::create($form_data);
        return redirect('/')->with('success', 'Datos guardados correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function show(Provedor $provedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Provedor $provedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provedor $provedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provedor $provedor)
    {
        //
    }
}
