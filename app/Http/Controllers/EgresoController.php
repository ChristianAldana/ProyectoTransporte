<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use App\Models\Transportista;
use App\Models\Camion;
use App\Models\Piloto;
use App\Models\Carga;
use App\Models\Predio;
use App\Models\Bodega;
use App\Models\Users;
use Illuminate\Http\Request;

class EgresoController extends Controller
{
    public function index()
    {
    
        return view('Egreso.out');
    }
    
    public function create()
    {
        $transportistas = Transportista::all();
        $matriculas = Camion::all();
        $pilotos = Piloto::all();
        $cargas = Carga::all();
        $predios = Predio::all(); 
        $bodegas = Bodega::all();

        return view('Egreso.out', compact('transportistas', 'matriculas', 'pilotos', 'cargas', 'predios', 'bodegas'));
    }


    public function store(Request $request)
    {   
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

        $egreso = new Egreso;
        $egreso->destino = $request->post('destino');
        $egreso->fechaIn = $request->post('fechaIn');
        $egreso->horaIn = $request->post('horaIn');
        $egreso->id_transportista = $request->post('id_transportista');
        $egreso->matricula = $request->post('matricula');
        $egreso->id_piloto = $request->post('id_piloto');
        $egreso->id_carga = $request->post('id_carga');
        $egreso->id_predio = $request->post('id_predio');
        $egreso->id_bodega = $request->post('id_bodega');
        $egreso->save();

        Alert::toast('Registrado', 'success');
        return redirect()->route('egreso.index');
    }


    public function show(Egreso $egreso)
    {
        $egreso = Egreso::find($egreso->id_egreso);
        return view('Egreso.out', compact('egreso'));
    }
      

    public function edit(Egreso $egreso)
    {
        //
    }

    public function update(Request $request, Egreso $egreso)
    {
        //
    }

    public function destroy(Egreso $egreso)
    {
        //
    }
}
