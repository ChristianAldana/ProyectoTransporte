<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@extends('layouts/layout')

<link href="{{ asset('assets/form.css') }}" rel="stylesheet">

@section('Registrar', 'Camion')

@section('contenido')
    <div class="mt-3 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
                    <h2>Camión</h2>
                    <h4>Registro de nuevos Camiones</h4>
                </div>
            </div>
            <div class="col-md-9">
                <form action="{{ route('camion.store') }}" method="POST" class="contact-form">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="matricula">Matrícula</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="matricula" placeholder="Ingresa la Matrícula" name="matricula">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="marca">Marca</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="marca" placeholder="Ingresa la Marca" name="marca">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="modelo">Modelo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="modelo" placeholder="Ingresa el Modelo" name="modelo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="capacidad">Capacidad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="capacidad" placeholder="Ingresa la Capacidad" name="capacidad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_transportista">ID Transportista</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="id_transportista" placeholder="Ingresa el ID del Transportista" name="id_transportista">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ route('camion.index') }}" class="btn btn-outline-dark">
                                Regresar
                            </a>
                            <button type="submit" class="btn btn-outline-info">Agregar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
