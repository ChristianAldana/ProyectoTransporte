<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransportistaController extends Controller
{
    public function index()
    {
        $datos = Transportista::orderBy('id','asc')->paginate(10);
        return view('Transportista/tabla-transp', compact('datos'));
    }

    public function create()
    {
        return view('regTransporte');
    }

    public function store(Request $request)
    {
        $transportista = new Transportista();
        $transportista -> nombre = $request ->post('nombre');
        $transportista -> razon_social = $request->post('razon_social');
        $transportista -> direccion = $request->post('direccion');
        $transportista -> save();
        //Alert::toast('Registrado','success');
        return redirect() -> route('transportista.index');

    }
    public function show($id)
    {
        $transportista = Transportista::find($id);
        return view('Transportista/eliminar-transp', compact('transportista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transportista  $transportista
     * @return \Illuminate\Http\Response
     */
    public function edit(transportista $transportista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transportista  $transportista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transportista $transportista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transportista  $transportista
     * @return \Illuminate\Http\Response
     */
    public function destroy(transportista $transportista)
    {
        //
    }
}
