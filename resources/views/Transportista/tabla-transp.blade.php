<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@extends('layouts/layout')
@section('Tabla', 'Transportista')


<link href="{{ asset('assets/form.css') }}" rel="stylesheet">

@section('contenido')
<div class="mt-3 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
                <h2 class="display-6">Registros transportista</h2>
                <div class="d-flex justify-content-end">
                    <a style="margin-right: 10px;" href="{{ route("Home") }}" class="btn btn-dark btn-sm my-5">
                        Volver
                    </a>
                    <br>
                    <a href="{{ route("transportista.create") }}" class="btn btn-dark btn-sm my-5">
                        Agregar nuevo
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div>
                <table class="table table-responsive">
                    <thead>
                        <th>Nombre Transportista</th>
                        <th>Razón Social</th>
                        <th>Dirección</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->razon_social}}</td>
                            <td>{{$item->direccion}}</td>
                            <td>
                                <form action="{{route('transportista.edit',$item->id_transportista)}}" method="GET">
                                    <button class="btn btn-outline-info btn-sm">
                                        <span class="bi bi-pencil-square"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('transportista.show',$item->id_transportista)}}" method="GET">
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
                    {{$datos->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
