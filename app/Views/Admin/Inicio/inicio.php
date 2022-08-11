    <!--  links -->
    <?php echo view("Admin/Header/header");?>
    <!-- /links -->

    <body>
        <br>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <h1 style="color:#fff">Listado de archivos</h1>
            </div>
        </div>
        <br>


        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Archivos</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url('Agregar_Archivos');?>">Agregar Archivos</a>
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
                                                <td><button class="btn btn-primary">Descargar</button></td>
                                            </tr>';
                                }
                                ?>

                                </tbody>
                            </table>
                            <!-- <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>











        <!-- functions -->
        <?php echo view("Admin/Footer/footer");?>
        <!-- /function -->


    </body>

    </html>