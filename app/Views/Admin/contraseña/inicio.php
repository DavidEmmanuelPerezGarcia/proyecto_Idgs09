    <!--  links -->
    <?php echo view("Admin/Header/header");?>
    <!-- /links -->

    <body>
        <br>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <h1 style="color:#fff">Agregar departamento</h1>
            </div>
        </div>
        <br>


        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
        </div>
        <div class="">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">

                                <div id="myTabContent" class="">

                                    <div class="" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="">
                                                    <form action="cambiar_contraseña" method="POST">
                                                        <div class="card-block">
                                                            <div class="text-muted f-w-400">
                                                                <p>Ingrese nueva contraseña</p>
                                                            </div>

                                                            <div class="input-group mg-b-15 mg-t-15">
                                                                <span class="input-group-addon"><i
                                                                        class="icon nalika-user"
                                                                        aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                    name="password" required
                                                                    placeholder="Ingrese su nueva contraseña">
                                                            </div>
                                                            <div class="form-group review-pro-edt mg-b-0-pt">
                                                                <button type="submit"
                                                                    class="btn btn-ctl-bt waves-effect waves-light">Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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