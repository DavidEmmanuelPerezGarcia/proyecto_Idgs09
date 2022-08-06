<?php echo view('inicio/Header/header')?>

<!-- Content page-->
<section class="full-box dashboard-contentPage">
	<!-- NavBar -->
	
	<!-- Content page -->
	<div class="container-fluid">
		<div class="page-header">
			<h1 class="text-titles">Archivos</h1>
		</div>
		<ul class="nav nav-tabs" style="margin-bottom: 15px;">
			<li class="active"><a href="#" id="btn-agregar" data-toggle="tab" aria-expanded="true">Listado<div
						class="ripple-container">
					</div></a></li>

			<li class=""><a href="#" id="btn-listado" data-toggle="tab" aria-expanded="false">Agregar archivos<div
						class="ripple-container"></div>
				</a></li>
		</ul>
		<section id="listado">
			<div class="table-responsive">
				<table class="table table-hover text-center">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Nombres</th>
							<th class="text-center">Apellidos</th>
							<th class="text-center">Nacionalidad</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
						if(!isset($jugadores)){
							echo '<tr><td colspan="6">No existen equipos</td></tr>';
						}else{
							foreach($jugadores as $j){
								echo 	'<tr>
											<td>'.$j["id"].'</td>
											<td>'.$j["nombres"].'</td>
											<td>'.$j["apellidos"].'</td>
											<td>'.$j["nacionalidad"].'</td>
											
											
										</tr>';
							}
						}
						?>
					</tbody>
				</table>
				<!-- <ul class="pagination pagination-sm">
					<li class="disabled"><a href="#!">«</a></li>
					<li class="active"><a href="#!">1</a></li>
					<li><a href="#!">2</a></li>
					<li><a href="#!">3</a></li>
					<li><a href="#!">4</a></li>
					<li><a href="#!">5</a></li>
					<li><a href="#!">»</a></li>
				</ul> -->
			</div>
		</section>

		<section id="agregar_jugadores" hidden>
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<form action="<?= base_url("agregar_jugadores");?>" method="POST">
						<h3 align="center">Datos del jugador</h3>
						<div class="form-group label-floating is-empty">
							<label class="control-label">Nombres del jugador</label>
							<input class="form-control" type="text" name="nombres_jugadores">
						</div>
						<div class="form-group label-floating is-empty">
							<label class="control-label">Apellidos del jugador</label>
							<input class="form-control" type="text" name="apellido_jugador">
						</div>
						<div class="form-group label-floating is-empty">
							<label class="control-label">Nacionalidad</label>
							<input class="form-control" type="text" name="nacionalidad_jugador">
						</div>
						<p class="text-center">
							<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>
								Save</button>
						</p>
					</form>
				</div>
			</div>
		</section>

	</div>




</section>
    <?php echo view('inicio/Footer/footer')?>
    <script>
	$("#btn-listado").click(function () {
		$("#listado").hide();
		$("#agregar_jugadores").show();
	})

	$("#btn-agregar").click(function () {
		$("#listado").show();
		$("#agregar_jugadores").hide();
	})

</script>