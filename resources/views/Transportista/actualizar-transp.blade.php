
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="{{ asset('assets/form.css') }}" rel="stylesheet">
@extends('layouts/layout')

@section('Actualizar', 'Transportista')

@section('contenido')
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
				<h2>Transportista</h2>
				<h4>Actualización en proceso...</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<form action="{{route('transportista.update', $transportista -> id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required value="{{$transportista -> nombre}}">
                    <label for="">Razón Social</label>
                    <input type="text" name="razon_social" class="form-control" required value="{{$transportista -> razon_social}}">
                    <label for="">Dirección</label>
                    <input type="text" name="direccion" class="form-control" required value="{{$transportista -> direccion}}">
                    <a href="{{route("transportista.index")}}" class="btn btn-secondary btn-sm">
                        <span class="bi bi-arrow-return-left"></span>  Regresar
                    </a>
                    <button class="btn btn-warning btn-sm">
                        <span class="bi bi-pencil-square"></span>  Actualizar
                    </button>
                </form>
			</div>
		</div>
	</div>
</div>
@endsection
