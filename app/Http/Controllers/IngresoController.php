<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use App\Models\Transportista;
use App\Models\Camion;
use App\Models\Piloto;
use App\Models\Carga;
use App\Models\Predio;
use App\Models\Bodega;
use Illuminate\Http\Request;

class IngresoController extends Controller
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
        $id_transportista = Transportista::all(); 
        $matricula = Camion::all();
        $id_piloto = Piloto::all();
        $id_carga = Carga::all();
        $id_predio = Predio::all();
        $id_bodega = Bodega::all();

        return view('Ingreso.in'); 

        return view('in', compact('id_transportista ', 'matricula', 'id_piloto', 'id_carga', 'id_predio', 'id_bodega'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        /*$ingresos = new Ingreso;
        $ingresos ->origen = $request->input ('origen');
        $ingresos ->fechaIn = $request->input ('fechaIn');
        $ingresos ->horaIn = $request->input ('horaIn');
        $ingresos ->id_transportista = $request->input ('id_transportista');
        $ingresos ->matricula = $request->input ('matricula');
        $ingresos ->id_piloto = $request->input ('id_piloto');
        $ingresos ->id_carga = $request->input ('id_carga');
        $ingresos ->id_predio = $request->input ('id_predio');
        $ingresos ->id_bodega = $request->input ('id_bodega');
        $ingresos ->save();*/

        Ingreso::create($request->all());


        $this->validate($request, [
            'origen' => 'required',
            'fechaIn' => 'required',
            'horaIn' => 'required',
            'id_transportista' => 'required',
            'matricula' => 'required',
            'id_piloto' => 'required',
            'id_carga' => 'required',
            'id_predio' => 'required',
            'id_bodega' => 'required',
        ]);

        return 'Completo';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function showIn(Ingreso $ingreso)
    {
        /*$transportista = transportista::all();
        $camion = camion::all();
        $piloto = piloto::all();
        $carga = carga::all();
        $predio = predio::all();
        $bodega = bodega::all();

        return view('in', compact('transportista ', 'camion', 'piloto', 'carga', 'predio', 'bodega'));
        */


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        //
    }
}
