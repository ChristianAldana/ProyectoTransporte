


<<<<<<< HEAD
@section('Registrar', 'Transportista')

@section('contenido')
<div class="mt-3 mb-5">
=======
<div class="container contact">
>>>>>>> a4d1fa2fe1059a9b3155f20e43303cfe38a045b6
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
				<h2>Transportista</h2>
				<h4>Registro de nuevos Transportistas</h4>
			</div>
		</div>
		<div class="col-md-9">
            <form action="{{route('transportista.store')}}"  method="POST" class="contact-form">
                @csrf
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="nombre">Nombre</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" placeholder="Ingresa el Nombre" name="nombre">
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="razon_social">Razon Social</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="razon_social" placeholder="Ingresa la Razon Social" name="razon_social">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="direccion">Dirección</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="direccion" placeholder="Ingresa la direccion" name="direccion">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                          <a href="{{route('transportista.index')}}" class="btn btn-outline-dark">
                              Regresar
                          </a>
                      <button type="submit" class="btn btn-outline-info">Agregar</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>
@endsection
