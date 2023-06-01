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
        $transportistas = Transportista::all(); 
        $camiones = Camion::all();
        $pilotos = Piloto::all();
        $cargas = Carga::all();
        $predios = Predio::all();
        $bodegas = Bodega::all();

        return view('ingreso.in'); 

        return view('in', compact('transportistas ', 'camiones', 'pilotos', 'cargas', 'predios', 'bodegas'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $ingresos = new Ingreso;
        $ingresos ->origen = $request->input ('origen');
        $ingresos ->fechaIn = $request->input ('fechaIn');
        $ingresos ->horaIn = $request->input ('horaIn');
        $ingresos ->transportistaIn = $request->input ('transportistaIn');
        $ingresos ->matriculaIn = $request->input ('matriculaIn');
        $ingresos ->pilotoIn = $request->input ('pilotoIn');
        $ingresos ->cargaIn = $request->input ('cargaIn');
        $ingresos ->predioIn = $request->input ('predioIn');
        $ingresos ->bodegaIn = $request->input ('bodegaIn');
        $ingresos ->save();

        Ingreso::create($request->all());


        $this->validate($request, [
            'origen' => 'required',
            'fechaIn' => 'required',
            'horaIn' => 'required',
            'transportistaIn' => 'required',
            'matriculaIn' => 'required',
            'pilotoIn' => 'required',
            'cargaIn' => 'required',
            'predioIn' => 'required',
            'bodegaIn' => 'required',
        ]);

        return 'Store';
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
        $ingreso = Ingreso::with(['transportista', 'camion', 'piloto', 'carga', 'predio', 'bodega'])->get();

        return view('in', ['ingreso' => $ingreso]);


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
