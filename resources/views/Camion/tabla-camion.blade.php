<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@extends('layouts/layout')
@section('Tabla', 'Camion')


<link href="{{ asset('assets/form.css') }}" rel="stylesheet">

@section('contenido')
    <div class="">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
                    <h2 class="display-6">Registros de Camiones</h2>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('camion.create') }}" class="btn btn-dark btn-sm my-5">
                            Agregar nuevo
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="table table-responsive">
                    <table class="table">
                        <thead>
                        <th>Matrícula</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Capacidad</th>
                        <th>ID Transportista</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </thead>
                        <tbody>
                        @foreach($camiones as $item)
                            <tr>
                                <td>{{ $item->matricula }}</td>
                                <td>{{ $item->marca }}</td>
                                <td>{{ $item->modelo }}</td>
                                <td>{{ $item->capacidad }}</td>
                                <td>{{ $item->transportista->nombre}}</td>
                                <td>
                                    <form action="{{ route('camion.edit', $item->matricula) }}" method="GET">
                                        <button class="btn btn-outline-info btn-sm">
                                            <span class="bi bi-pencil-square"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('camion.destroy', $item->matricula) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-info btn-sm">
                                            <span class="bi bi-trash3"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $camiones->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
