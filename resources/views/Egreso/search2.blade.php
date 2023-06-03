@extends('layouts/layout')
@section('contenido')
    <link href="{{ asset('assets/form.css') }}" rel="stylesheet">
    <div class="mt-3 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/kisspng-computer-icons-truck-font-awesome-couriers-vector-5ae0b656310a78.1827635715246761822009.png" width="90"/>
                    <h2 class="display-6">Registros de Egresos</h2>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route("egreso.create") }}" class="btn btn-dark btn-sm my-5">
                            Agregar nuevo
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <form class="form-inline" action="" method="GET">
                    <div class="form-row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><b>Del Dia</b></label>
                                <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><b> Hasta  el Dia</b></label>
                                <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-info btn-sm mt-4 mx-2">Buscar</button>
                        </div>
                    </div>
                    <br>
                </form>
                <div class="table table-responsive">
                    <table class="table">
                        <thead>
                        <th>Destino</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Transportista</th>
                        <th>Matricula</th>
                        <th>Piloto</th>
                        <th>Carga</th>
                        <th>Predio</th>
                        <th>Bodega</th>
                        </thead>
                        <?php
                        $conexion=mysqli_connect("localhost","root","root","proyecto_final");

                        if(isset($_GET['from_date']) && isset($_GET['to_date']))
                        {
                            $from_date = $_GET['from_date'];
                            $to_date = $_GET['to_date'];

                            $query = "SELECT egreso.id_egreso, egreso.fecha, egreso.hora, egreso.destino, egreso.id_carga, egreso.matricula,
                                    egreso.id_transportista, egreso.id_piloto, egreso.id_predio, egreso.id_bodega, egreso.id_usuario FROM egreso
                                    LEFT JOIN transportista ON egreso.id_transportista = transportista.id_transportista LEFT JOIN carga ON egreso.id_carga = carga.id_carga
                                    LEFT JOIN piloto ON egreso.id_piloto = piloto.id_piloto LEFT JOIN predio ON egreso.id_predio = predio.id_predio LEFT JOIN bodega ON egreso.id_bodega = bodega.id_bodega
                                    LEFT JOIN users ON egreso.id_usuario = users.id_usuario WHERE fecha BETWEEN '$from_date' AND '$to_date' ";
                            $query_run = mysqli_query($conexion, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                        foreach($query_run as $fila)
                        {
                            ?>
                        <tr>
                            <td><?php echo $fila['origen'];?></td>
                            <td><?php echo $fila['fechaIn'];?></td>
                            <td><?php echo $fila['horaIn'];?></td>
                            <td><?php echo $fila['id_transportista']?></td>
                            <td><?php echo $fila['matricula'];?></td>
                            <td><?php echo $fila['id_piloto'];?></td>
                            <td><?php echo $fila['id_carga'];?></td>
                            <td><?php echo $fila['id_predio'];?></td>
                            <td><?php echo $fila['id_bodega'];?></td>
                        </tr>
                            <?php
                        }
                        }
                        else{

                            ?>

                        <tr>
                            <td><?php  echo "No se encontraron resultados"; ?></td>
                                <?php
                            }
                            }
                            ?>
                        </tr>
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
