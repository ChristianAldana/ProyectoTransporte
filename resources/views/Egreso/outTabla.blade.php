	@extends('layouts/layout')
	@section('contenido')
	<link href="{{ asset('assets/form.css') }}" rel="stylesheet">
<div class="mt-3 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
                <h2 class="display-6">Registros de Egresos</h2>
                <div class="d-flex justify-content-end">
                    <a href="{{ route("egreso.create") }}" class="btn btn-dark btn-sm my-5">
                        Agregar nuevo
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-9">

            <div class="table table-responsive">
                <form method="GET" action="{{ route('egreso.filtro') }}">
                    <div class="form-group">
                        <label for="filtro_nombre">Filtrar por transportista:</label>
                        <input type="text" name="filtro_nombre" id="filtro_nombre" class="form-control" value="{{ $filtroNombre ?? '' }}">
                    </div>
                    <button type="submit" class="btn btn-info btn-sm mb-4">Buscar</button>
                </form>
                <table class="table">
                    <thead>
                        <th>Destino</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Transportista</th>
                        <th>Matricula</th>
                        <th>Piloto</th>
                        <th>Carga</th>
                        <th>Predio</th>
                        <th>Bodega</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{$item->destino}}</td>
                            <td>{{$item->fecha}}</td>
                            <td>{{$item->hora}}</td>
                            <td>{{$item->transportista->nombre}}</td>
                            <td>{{$item->matricula}}</td>
                            <td>{{$item->id_piloto}}</td>
                            <td>{{$item->carga->carga}}</td>
                            <td>{{$item->predio->ubicacion}}</td>
                            <td>{{$item->bodega->bodega}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{$datos->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
