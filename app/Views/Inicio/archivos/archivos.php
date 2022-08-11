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
							<Form autocomplete="off" class="form-inline" id="formarchivo" method="post">
								<Center>
									<h4>Nombre del archivo</h4>
									<div class="input grup">
										
										<input type="text" name="nombre" placehoder="nombre del documento" class="form-control" required="required">

									</div>
									<button class="btn btn-light btn-sm" id="upfile"><i class="fa fa-upload" id="icon.btn-file" aria-hidden="true"></i></button>
									<input type="file" name"archivo" id="getfile" class="hidden" required="required">
									<input type="submit" form="formarchivos" id="setarchivo" class="btn btn-success btn-sm" value="agregar">
								</Center>
							</Form>
								
							
								
							
                            <div class="add-product" hidden>
                                <a href="#"></a>
                            </div>
                            <table>
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>Descripcion del archivo</th>
                                    <th>Apelliddos</th>
                                    

                                </tr>


                            </tbody></table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>		

    
<script link=""></script>
<?php echo view('inicio/Footer/footer')?>
    