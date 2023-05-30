<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="{{ asset('assets/form.css') }}" rel="stylesheet">

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
				<h2>Transportista</h2>
				<h4>Registro de nuevos Transportistas</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
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
				  <label class="control-label col-sm-2" for="direccion">Direccion</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="direccion" placeholder="Ingresa la direccion" name="direccion">
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
