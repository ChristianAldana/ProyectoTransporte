<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use App\Models\Transportista;
use App\Models\Camion;
use App\Models\Piloto;
use App\Models\Carga;
use App\Models\Predio;
use App\Models\Bodega;
use App\Models\Users;
use Illuminate\Http\Request;

class IngresoController extends Controller
{

    public function index()
    {
    
        return view('Ingreso.in');
    }
    
    public function create()
    {
        $transportistas = Transportista::all();
        $matriculas = Camion::all();
        $pilotos = Piloto::all();
        $cargas = Carga::all();
        $predios = Predio::all(); 
        $bodegas = Bodega::all();

        return view('Ingreso.in', compact('transportistas', 'matriculas', 'pilotos', 'cargas', 'predios', 'bodegas'));
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

        $ingreso = new Ingreso;
        $ingreso->origen = $request->post('origen');
        $ingreso->fechaIn = $request->post('fechaIn');
        $ingreso->horaIn = $request->post('horaIn');
        $ingreso->id_transportista = $request->post('id_transportista');
        $ingreso->matricula = $request->post('matricula');
        $ingreso->id_piloto = $request->post('id_piloto');
        $ingreso->id_carga = $request->post('id_carga');
        $ingreso->id_predio = $request->post('id_predio');
        $ingreso->id_bodega = $request->post('id_bodega');
        $ingreso->save();

        Alert::toast('Registrado', 'success');
        return redirect()->route('ingreso.index');
    }


    public function show(Ingreso $ingreso)
    {
        $ingreso = Ingreso::find($ingreso->id_ingreso);
        return view('Ingreso.in', compact('ingreso'));
    }
      

    public function edit(Ingreso $ingreso)
    {
        //
    }

    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    public function destroy(Ingreso $ingreso)
    {
        //
    }
}
