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
use RealRashid\SweetAlert\Facades\Alert;

class IngresoController extends Controller
{
    public function index()
    {
        $datos = Ingreso::orderBy('id_ingreso', 'asc')->paginate(8);
        return view('Ingreso/inTabla', compact('datos'));
    }

    public function create()
    {
        return view('Ingreso/in');
    }

    public function store(Request $request)
    {
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
        $ingreso->id_usuario = $request->post('id_usuario');
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

    public function fecha()
    {
        $datos = Ingreso::orderBy('id_ingreso', 'asc')->paginate(8);
        return view('Ingreso/search1', compact('datos'));
    }

    public function filtroNombre(Request $request)
    {
        $filtroNombre = $request->input('filtro_nombre');

        // Obtener los registros de ingresos filtrados por nombre
        $datos = Ingreso::query()
            ->whereHas('transportista', function ($query) use ($filtroNombre) {
                $query->where('nombre', 'like', "%$filtroNombre%");
            })
            ->paginate(10);

        return view('Ingreso/inTabla', compact('datos', 'filtroNombre'));
    }
}
