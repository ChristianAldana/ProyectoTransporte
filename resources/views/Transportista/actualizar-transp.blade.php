@extends('layouts/layout')

@section('Actualizar', 'Transportista')

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
				<form action="{{route('transportista.update', $transportista -> id_transportista)}}" method="POST">
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
