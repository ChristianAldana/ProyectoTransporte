@extends('layout/layoutS')
@section('tituloPagina', 'ingresos')
@section('navbar')
@section('contenido') 


<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
				<h2>INGRESO</h2>
				<h4>Registro de ingresos a predio</h4>
			</div>
		</div>
	
		<form action="/Ingreso " method="POST" role="form">

		{{ csrf_field( ) }}

		<div class="col-md-9">
			<div class="contact-form">
				
				<div class="alert alert-danger"><ul>				
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul></div>


				<div class="form-group">
				  <label class="control-label col-sm-2" for="origen">Origen</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="origen" placeholder="Ingresa la dirección de origen" name="origen">
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

				<div class="input-group col-mb-10"> 
					<label class="control-label col-sm-3 mr-2" for="id_transportista">Transportista</label>
					<select class="form-select col-sm-6 ml-4" id="id_transportista" name="id_transportista">
						<option selected>Selecciona...</option>	

						@foreach ($id_transportista as $transportista)
						<option value="{{ $transportista-id }}">{{ $transportista->nombre }}</option>
						@endforeach

					</select>
				</div>

				<br><div class="input-group col-mb-10"> 
					<label class="control-label col-sm-3 mr-2" for="matricula">Matricula</label>
					<select class="form-select col-sm-6 ml-4" id="matricula" name="matricula">
						<option selected>Selecciona...</option>	

						@foreach ($matricula as $camion)
						<option value="{{ $camion-matricula }}">{{ $camion->matricula }}</option>
						@endforeach

					</select>
				</div>

				<br><div class="input-group col-mb-10"> 
					<label class="control-label col-sm-3 mr-2" for="id_piloto">Piloto</label>
					<select class="form-select col-sm-6 ml-4" id="id_piloto" name="id_piloto">
						<option selected>Selecciona...</option>	

						@foreach ($id_piloto as $piloto)
						<option value="{{ $piloto-id }}">{{ $piloto->nombre }}</option>
						@endforeach

					</select>
				</div>

				<br><div class="input-group col-mb-10"> 
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

						@foreach ($id_predio as $predio)
						<option value="{{ $predio-id }}">{{ $predio->ubicacion }}</option>
						@endforeach
					</select>

					<select class="form-select col-sm-4 ml-5" id="id_bodega" name="id_bodega">
                    <option selected>Selecciona...</option>

						@foreach ($id_bodega as $bodega)
						<option value="{{ $bodega-id }}">{{ $bodega->bodega }}</option>
						@endforeach
                    </select>
				</div>

				<br>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	  </form>
	</div>
</div>
