@extends('layouts/layout')
@section('Tabla', 'Transportista')

@section('contenido')

<div class="mt-3 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
                <h2 class="display-6">Eliminar Registro</h2>
            </div>
        </div>
        <div class="col-md-9">
            <div>
                <table class="table table-responsive">
                    <thead>
                    <th>Nombre Transportista</th>
                    <th>Razón Social</th>
                    <th>Dirección</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$transportista->nombre}}</td>
                            <td>{{$transportista->razon_social}}</td>
                            <td>{{$transportista->direccion}}</td>
                        </tr>
                    </tbody>
                </table>
                <form action="{{route('transportista.destroy', $transportista -> id_transportista)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="mt-5">
                        <a href="{{route('transportista.index')}}" class="btn btn-sm btn-outline-dark">
                            Regresar
                        </a>
                        <button class="btn btn-sm btn-outline-danger mx-3">
                            Eliminar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
