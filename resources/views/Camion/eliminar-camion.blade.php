@extends('layouts/layout')

@section('title', 'Camion')

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
                        <th>Matrícula</th>
                        <th>Modelo</th>
                        <th>Capacidad</th>
                        <th>ID Transportista</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $camion->matricula }}</td>
                            <td>{{ $camion->modelo }}</td>
                            <td>{{ $camion->capacidad }}</td>
                            <td>{{ $camion->id_transportista }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <form action="{{ route('camion.destroy', $camion->matricula) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mt-5">
                            <a href="{{ route('camion.index') }}" class="btn btn-sm btn-outline-dark">
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

