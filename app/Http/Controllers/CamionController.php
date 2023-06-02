<?php
namespace App\Http\Controllers;
use App\Models\Transportista;

use App\Models\Camion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CamionController extends Controller
{
    public function index()
    {
        $camiones = Camion::orderBy('matricula', 'asc')->paginate(6);
        return view('Camion/tabla-camion', compact('camiones'));
    }

   public function create()
   {
       $transportistas = Transportista::all();


       return view('Camion.regCamion', compact('transportistas'));
   }

    public function store(Request $request)
    {
        $camion = new Camion();
        $camion->matricula = $request->post('matricula');
        $camion->marca = $request->post('marca');
        $camion->modelo = $request->post('modelo');
        $camion->capacidad = $request->post('capacidad');
        $camion->id_transportista = $request->post('id_transportista');
        $camion->save();

        Alert::toast('Registrado', 'success');
        return redirect()->route('camion.index');
    }

    public function show($matricula)
    {
        $camion = Camion::find($matricula);
        return view('Camion/eliminar-camion', compact('camion'));
    }

    public function edit($matricula)
    {
        $camion = Camion::find($matricula);
        return view('Camion/actualizar-camion', compact('camion'));
    }

    public function update(Request $request, $matricula)
    {
        $camion = Camion::find($matricula);
        $camion->matricula = $request->post('matricula');
        $camion->modelo = $request->post('modelo');
        $camion->capacidad = $request->post('capacidad');
        $camion->id_transportista = $request->post('id_transportista');
        $camion->save();

        Alert::toast('Actualizado', 'info');
        return redirect()->route('camion.index');
    }

    public function destroy($matricula)
    {
        $camion = Camion::find($matricula);
        $camion->delete();

        Alert::toast('Eliminado con éxito', 'error');
        return redirect()->route('camion.index');
    }
}
