<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="{{ asset('assets/form.css') }}" rel="stylesheet">

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
				<h2>Camión</h2>
				<h4>Registro de nuevos Camiones</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="Matricula">Matricula</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="Matricula" placeholder="Ingresa la matricula" name="Matricula">
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
					<input type="text" class="form-control" id="modelo" placeholder="Ingresa el modelo" name="modelo">
				  </div>
				</div>

                <div class="form-group">
				  <label class="control-label col-sm-2" for="cap">Capacidad</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="cap" placeholder="Ingresa la capacidad en Lb" name="cap">
				  </div>
				</div>

				<div class="input-group col-mb-10"> 
					<label class="control-label col-sm-3 mr-2" for="transportistaIn">Transportista</label>
					<select class="form-select col-sm-6 ml-4" id="transportistaIn">
						<option selected>Selecciona...</option>	
						@foreach ($transportista as @transportista)
						<option value="{{ $transportista-id }}">{{ $transportista->nombre }}</option>
						@endforeach

					</select>
				</div>

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
