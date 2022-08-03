    <!--  links -->
    <?php echo view("Admin/Header/header");?>
    <!-- /links -->

    <body>
        <br>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <h1 style="color:#fff">Listado de usuarios</h1>
            </div>
        </div>
        <br>


        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Usuarios</h4>
                            <div class="add-product" hidden>
                                <a href="#"></a>
                            </div>
                            <table>
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Apelliddos</th>
                                    <th>Correo</th>
                                    <th>Fecha registro</th>
                                    <th>Fecha ultima conexion</th>
                                    <th>Tipo de usuario</th>
                                    <th>Activo</th>

                                </tr>

                                <?php
                                foreach($usuarios as $u){
                                    if($u["type_user"] == 1){
                                        $tipo_usuario = "<td style='color:yellow'>Administrador</td>";
                                        $activo = "<td><button class='btn btn-success' disabled></button></td>";

                                    }else{
                                        $tipo_usuario = "<td>Comun</td>";
                                        if($u["activo"] == 1){
                                            $activo = "<td><button class='btn btn-success'><i class='fa-solid fa-circle-check'></i></button></td>";
                                        }else{
                                            $activo = "<td><button class='btn btn-danger'></button></td>";
                                        }
                                    }

                                    echo    '<tr>
                                                <td>'.$u["id"].'</td>
                                                <td>'.$u["first_name"].'</td>
                                                <td>'.$u["last_name"].'</td>
                                                <td>'.$u["email"].'</td>
                                                <td>'.$u["created_at"].'</td>
                                                <td>'.$u["updated_at"].'</td>
                                                '.$tipo_usuario.'
                                                '.$activo.'
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