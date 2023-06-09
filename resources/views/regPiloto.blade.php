<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="{{ asset('assets/form.css') }}" rel="stylesheet">

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
				<h2>Pilotos</h2>
				<h4>Registro de nuevos Pilotos</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="name">Nombre</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="name" placeholder="Ingresa el Nombre" name="name">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-4" for="apellido">Apellido</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="apellido" placeholder="Ingresa el apellido" name="apellido">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="telefono">Telefono</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="telefono" placeholder="Ingresa el # de telefono" name="telefono">
				  </div>
				</div>
                <div class="form-group">
				  <label class="control-label col-sm-2" for="pdireccion">Direccion</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="pdireccion" placeholder="Ingresa la direccion" name="pdireccion">
				  </div>
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
