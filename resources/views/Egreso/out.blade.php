<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('assets/form.css') }}" rel="stylesheet"> 


<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
				<h2>EGRESO</h2>
				<h4>Registro de egresos del predio</h4>
			</div>
		</div>
	
		<div class="col-md-9">
			<div class="contact-form">

			<form action="{{route('ingreso.store')}}"  method="POST">
			{{ csrf_field( ) }}
			@if (count($errors)>0) 
				<div class="alert alert-danger"><ul>				
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul></div>
			@endif

				<div class="form-group">
				  <label class="control-label col-sm-2" for="destino">Destino</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="destino" placeholder="Ingresa la dirección del destino" name="destino">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-4" for="fechaIn">Fecha</label>
				  <label class="control-label col-sm-4" for="horaIn">Hora</label>
				  <div class="input-group col-sm-10">          
					<input type="date" class="form-control" id="fechaIn" name="fechaIn">
					<input type="time" class="form-control" id="horaIn" name="horaIn">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="id_transportista">Transportista</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="id_transportista" placeholder="Ingresa el nombre de la Transportista" name="id_transportista">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-4" for="matricula">Matricula</label>
				  <label class="control-label col-sm-4" for="id_piloto">Piloto</label>
				  <div class="input-group col-sm-10">          
				  	<input type="text" class="form-control" id="matricula" placeholder="Ingresa la matricula" name="matricula">
					<input type="text" class="form-control" id="id_piloto" placeholder="Ingresa el nombre" name="id_piloto">
				  </div>
				</div>
				

				<div class="input-group col-mb-10"> 
					<label class="control-label col-sm-3 mr-2" for="id_carga">Tipo de Carga</label>
					<select class="form-select col-sm-6 ml-4" id="id_carga" name="id_carga">
						<option selected>Selecciona...</option>
						<option value="1">Materia prima</option>
						<option value="2">Bien intermedio</option>
						<option value="3">Perecederos</option>
						<option value="4">No perecederos</option>
						<option value="5">Peligrosa</option>
						<option value="5">Fragil</option>
					</select>
				</div>
				
				<br><div class="input-group col-mb-10">      
					<label class="control-label col-sm-5" for="id_predio">Predio</label>
					<label class="control-label col-sm-5" for="id_bodega">Bodega</label>

					<select class="form-select col-sm-4 ml-3" id="id_predio" name="id_predio">
						<option selected>Selecciona...</option>
						<option value="1">Guatemala</option>
						<option value="2">El Salvador</option>
					</select>

					<select class="form-select col-sm-4 ml-5" id="id_bodega" name="id_bodega">
                    <option selected>Selecciona...</option>
					<option value="1">Principal Guatemala</option>
					<option value="2">Secundaria Guatemala</option>
					<option value="3">Principal El Salvador</option>
					<option value="4">Secundaria El Salvador</option>
                    </select>
				</div>

				<br><div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	  </form>
	</div>
</div>