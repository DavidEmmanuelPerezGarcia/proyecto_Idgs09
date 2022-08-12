<?php echo view('inicio/Header/header')?>

<!-- Content page-->
<body>
        <br>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <h1 style="color:#fff">Listado de Archivos</h1>
            </div>
        </div>
        <br>
		<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Archivos</h4>
							<form autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url('agregar_archivo_comun');?>" class="form-inline" id="formarchivo" method="post">
								<Center>
									<h4>Nombre del archivo</h4>
									<div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-file" aria-hidden="true"></i>
                                            
                                        </span>
										
										<input type="text" name="nombre_archivo" placehoder="nombre del documento" class="form-control" >

									</div>
									<button class="btn btn-light btn-sm" id="upFile"><i class="fa fa-upload" id="ico-btn-file" aria-hidden="true"></i></button>
									<input type="file" name="archivo" id="getFile" class="hidden" required="required">
									<!-- <input type="submit" form="formarchivos" id="setarchivo" class="btn btn-success btn-sm" value="agregar"> -->
                                    <button types="submit" class="btn btn-success btn-sm">Agregar</button>
								</Center>
							</form>
								
							
								
							
                            <div class="add-product" hidden>
                                <a href="#"></a>
                            </div>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Propietario</th>
                                        <th>Fecha</th>
                                        <th>Descargar archivo</th>
                                    </tr>
                                <?php
                                foreach($archivos as $a){
                                    echo   '<tr>
                                                <td>'.$a["id"].'</td>
                                                <td>'.$a["nombre"].'</td>
                                                <td>'.$a["usuario"].'</td>
                                                <td>'.$a["date"].'</td>
                                                <td><a href="'.base_url('public')."/archivos/".$a["ruta_archivo"].'" class="btn btn-primary" download>Descargar</a></td>
                                            </tr>';
                                }
                                ?>

                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>		

    
<script link=""></script>
<?php echo view('inicio/Footer/footer')?>
    