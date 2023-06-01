<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransportistaController extends Controller
{
    public function index()
    {
        $datos = Transportista::orderBy('id_transportista', 'asc')->paginate(6);
        return view('Transportista/tabla-transp', compact('datos'));
    }
    public function create()
    {
        return view('Transportista/regTransporte');
    }

    public function store(Request $request)
    {
        $transportista = new Transportista();
        $transportista -> nombre = $request ->post('nombre');
        $transportista -> razon_social = $request->post('razon_social');
        $transportista -> direccion = $request->post('direccion');
        $transportista -> save();
        Alert::toast('Registrado','success');
        return redirect() -> route('transportista.index');

    }
    public function show($id_transportista)
    {
        $transportista = Transportista::find($id_transportista);
        return view('Transportista/eliminar-transp', compact('transportista'));
    }
    public function edit($id_transportista)
    {
        $transportista = Transportista::find($id_transportista);
        return view('Transportista/actualizar-transp', compact('transportista'));
    }
    public function update(Request $request, $id_transportista)
    {
        $transportista = Transportista::find($id_transportista);
        $transportista -> nombre = $request -> post('nombre');
        $transportista -> razon_social = $request->post('razon_social');
        $transportista -> direccion = $request->post('direccion');
        $transportista -> save();
        Alert::toast('Actualizado!','info');
        return redirect() -> route('transportista.index');
    }
    public function destroy($id_transportista)
    {
        $transportista = Transportista::find($id_transportista);
        $transportista -> delete();
        Alert::toast('Eliminado con éxito', 'error');
        return redirect()->route("transportista.index");
    }
}
