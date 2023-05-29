<?php

namespace App\Http\Controllers;

use App\Models\transportista;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransportistaController extends Controller
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
        $transportista = Transportista::all(); 

        return view('in', ['transportista' => $transportista]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transportista  $transportista
     * @return \Illuminate\Http\Response
     */
    public function show(transportista $transportista)
    {
        //
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
