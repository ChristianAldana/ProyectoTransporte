@extends('layouts/layout')

@section('Actualizar', ' Camion')

@section('contenido')
    <div class="mt-3 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
                    <h2 class="display-6">Actualizar</h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">
                    <form action="{{ route('camion.update', $camion->matricula) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <label for="matricula">Matrícula</label>
                        <input type="text" name="matricula" class="form-control" required value="{{ $camion->matricula }}">
                        <label for="marca">Marca</label>
                        <input type="text" name="marca" class="form-control" required value="{{ $camion->marca }}">
                        <label for="modelo">Modelo</label>
                        <input type="text" name="modelo" class="form-control" required value="{{ $camion->modelo }}">
                        <label for="capacidad">Capacidad</label>
                        <input type="text" name="capacidad" class="form-control" required value="{{ $camion->capacidad }}">
                        <label for="id_transportista">ID Transportista</label>
                        <input type="number" name="id_transportista" class="form-control" required value="{{ $camion->id_transportista }}">

                        <a href="{{ route('camion.index') }}" class="btn btn-secondary btn-sm">
                            <span class="bi bi-arrow-return-left"></span> Regresar
                        </a>
                        <button class="btn btn-warning btn-sm">
                            <span class="bi bi-pencil-square"></span> Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
