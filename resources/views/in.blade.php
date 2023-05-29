<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('assets/form.css') }}" rel="stylesheet">


<!--las etiquetas xxIn <- "In" es para especificar que son datos de registro de Ingreso UwU -->


<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
				<h2>INGRESO</h2>
				<h4>Registro de ingresos a predio</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
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
					<label class="control-label col-sm-3 mr-2" for="transportistaIn">Transportista</label>
					<select class="form-select col-sm-6 ml-4" id="transportistaIn">
						<option selected>Selecciona...</option>	

						@foreach ($ingreso as $ingreso)
							<option value="{{ $ingreso->transportista->id }}">{{ $ingreso->transportista->nombre }}</option>
						@endforeach

					</select>
				</div>

				<br><div class="input-group col-mb-10"> 
					<label class="control-label col-sm-3 mr-2" for="matriculaIn">Matricula</label>
					<select class="form-select col-sm-6 ml-4" id="matriculaIn">
						<option selected>Selecciona...</option>	
						@foreach ($ingreso as $ingreso)
							<option value="{{ $ingreso->camion->id }}">{{ $ingreso->camion->matricula }}</option>
						@endforeach

						<!--@foreach ($camion as $camion)
						<option value="{{ $camion-id }}">{{ $camion->id_matricula }}</option>
						@endforeach-->

					</select>
				</div>

				<br><div class="input-group col-mb-10"> 
					<label class="control-label col-sm-3 mr-2" for="pilotoIn">Piloto</label>
					<select class="form-select col-sm-6 ml-4" id="pilotoIn">
						<option selected>Selecciona...</option>	
						
						@foreach ($ingreso as $ingreso)
							<option value="{{ $ingreso->piloto->id }}">{{ $ingreso->piloto->nombre }}</option>
						@endforeach

						<!--@foreach ($piloto as $piloto)
						<option value="{{ $piloto-id }}">{{ $piloto->nombre }}</option>
						@endforeach-->

					</select>
				</div>

				<br><div class="input-group col-mb-10"> 
					<label class="control-label col-sm-3 mr-2" for="cargaIn">Tipo de Carga</label>
					<select class="form-select col-sm-6 ml-4" id="cargaIn">
						<option selected>Selecciona...</option>
						<option value="1">Materia prima</option>
						<option value="2">Bien intermedio</option>
						<option value="3">Perecederos</option>
						<option value="4">No perecederos</option>
						<option value="5">Peligrosa</option>
						<option value="5">Fragil</option>
					</select>
				</div>
				
				<br><div class="input-group col-mb-10">     <!-- Select anidado para PREDIO y BODEGA --> 
					<label class="control-label col-sm-5" for="predioIn">Predio</label>
					<label class="control-label col-sm-5" for="bodegaIn">Bodega</label>

					<select class="form-select col-sm-4 ml-3" id="predioIn">
						<option selected>Selecciona...</option>

						@foreach ($ingreso as $ingreso)
							<option value="{{ $ingreso->predio->id }}">{{ $ingreso->predio->ubicacion }}</option>
						@endforeach

						<!--@foreach ($predio as $predio)
						<option value="{{ $predio-id }}">{{ $predio->ubicacion }}</option>
						@endforeach-->
					</select>

					<select class="form-select col-sm-4 ml-5" id="bodegaIn">
                    <option selected>Selecciona...</option>
					@foreach ($ingreso as $ingreso)
							<option value="{{ $ingreso->bodega->id }}">{{ $ingreso->bodega->bodega }}</option>
						@endforeach

					<!--@foreach ($bodega as $bodega)
						<option value="{{ $bodega-id }}">{{ $bodega->bodega }}</option>
						@endforeach-->
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
	</div>
</div>
