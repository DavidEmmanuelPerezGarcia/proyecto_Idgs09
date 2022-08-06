    <!--  links -->
    <?php echo view("Admin/Header/header");?>
    <!-- /links -->

    <body>
        <br>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <h1 style="color:#fff">Lisatado de departamentos</h1>
            </div>
        </div>
        <br>


        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Departamentos</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url('Agregar_departamento');?>">Agregar Departamento</a>
                            </div>
                            <table>
                                <tbody>
                                    <tr>
                                    <th>ID</th>
                                    <th>Nombre departamento</th>
                                    <th>Descripcion</th>
                                    <th>Activo</th>
                                </tr>

                                <?php
                                foreach($departamentos as $d){
                                    echo    '<tr>
                                                <td>'.$d["id"].'</td>
                                                <td>'.$d["nombre"].'</td>
                                                <td>'.$d["descripcion"].'</td>
                                            </tr>';
                                }
                                ?>

                            </tbody></table>
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