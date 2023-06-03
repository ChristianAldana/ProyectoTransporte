@extends('layouts/layout')
@section('Tabla', 'Ingreso')

@section('contenido')
<div class="mt-3 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
                <h2 class="display-6">Registros de Ingresos</h2>
                <div class="d-flex justify-content-end">
                    <a style="margin-right: 10px;" href="{{ route("Home") }}" class="btn btn-dark btn-sm my-5">
                        Volver
                    </a>
                    <a href="{{ route("ingreso.create") }}" class="btn btn-dark btn-sm my-5">
                        Agregar nuevo
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="table table-responsive">
                <table class="table">
                    <thead>
                        <th>Origen</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Transporte</th>
                        <th>Matricula</th>
                        <th>Piloto</th>
                        <th>Carga</th>
                        <th>Predio</th>
                        <th>Bodega</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{$item->origen}}</td>
                            <td>{{$item->fechaIn}}</td>
                            <td>{{$item->horaIn}}</td>
                            <td>{{$item->transportista->nombre}}</td>
                            <td>{{$item->matricula}}</td>
                            <td>{{$item->piloto->nombre}}</td>
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
