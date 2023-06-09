<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use App\Models\Ingreso;
use App\Models\Transportista;
use App\Models\Camion;
use App\Models\Piloto;
use App\Models\Carga;
use App\Models\Predio;
use App\Models\Bodega;
use App\Models\Users;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EgresoController extends Controller
{
    public function index()
    {

        $datos = Egreso::orderBy('id_egreso', 'asc')->paginate(8);
        return view('Egreso/outTabla', compact('datos'));
    }

    public function create()
    {
        return view('Egreso/out');
    }

    public function store(Request $request)
    {

        $egreso = new Egreso;
        $egreso->destino = $request->post('destino');
        $egreso->fecha = $request->post('fecha');
        $egreso->hora = $request->post('hora');
        $egreso->id_transportista = $request->post('id_transportista');
        $egreso->matricula = $request->post('matricula');
        $egreso->id_piloto = $request->post('id_piloto');
        $egreso->id_carga = $request->post('id_carga');
        $egreso->id_predio = $request->post('id_predio');
        $egreso->id_bodega = $request->post('id_bodega');
        $egreso->id_usuario = $request->post('id_usuario');
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
    public function fecha(){
        $datos = Egreso::orderBy('id_egreso', 'asc')->paginate(8);
        return view('Egreso/search2', compact('datos'));
    }
    public function filtroNombre(Request $request)
    {
        $filtroNombre = $request->input('filtro_nombre');

        // Obtener los registros de ingresos filtrados por nombre
        $datos = Egreso::query()
            ->whereHas('transportista', function ($query) use ($filtroNombre) {
                $query->where('nombre', 'like', "%$filtroNombre%");
            })
            ->paginate(10);

        return view('Egreso/outTabla', compact('datos', 'filtroNombre'));
    }
}
