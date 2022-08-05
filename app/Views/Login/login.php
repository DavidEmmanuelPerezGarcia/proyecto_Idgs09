

<?php
/*if(!isset($_SESSION["type_user"])){
  echo 'console.log("no existe");';
  echo 'hola';
  header('Location: '.$nuevaURL.php);
}else{
  echo 'console.log("existe");';
  echo 'hola';
}*/

if(isset($_SESSION["type_user"])){
  
  if($_SESSION["type_user"] == 1){
    header('Location: '.base_url('Admin'));
    exit();

  }else{
    header('Location: '.base_url('Inicio'));
    exit();
  }
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login | Nalika - Material Admin Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>/public/img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/owl.carousel.css">
  <link rel="stylesheet" href="<?= base_url();?>/public/css/owl.theme.css">
  <link rel="stylesheet" href="<?= base_url();?>/public/css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/normalize.css">
  <!-- main CSS
		============================================ -->
  <!-- <link rel="stylesheet" href="<?= base_url();?>/public/css/main.css"> -->
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="<?= base_url();?>/public/css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?= base_url();?>/public/css/calendar/fullcalendar.print.min.css">
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/form/all-type-forms.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url();?>/public/css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <!-- <script src="<?= base_url();?>/public/js/vendor/modernizr-2.8.3.min.js"></script> -->
</head>

<body>
  <div class="color-line"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="back-link back-backend">
          <a href="index.html" class="btn btn-primary">Back to Dashboard</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
        <div class="text-center m-b-md custom-login">
          <h3>PLEASE LOGIN TO APP</h3>
          <p>This is the best app ever!</p>
        </div>
        <div class="hpanel">
          <div class="panel-body">
            <form action="#" id="loginForm">
              <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required=""
                  value="" name="username" id="username" class="form-control">
                <span class="help-block small">Your unique username to app</span>
              </div>

              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" required="" value=""
                  name="password" id="password" class="form-control">
                <span class="help-block small">Yur strong password</span>
              </div>





              <button class="btn btn-success btn-block loginbtn">Login</button>
              <a class="btn btn-default btn-block" href="#">Register</a>
            </form>
            <br>
            <button class="btn btn-danger btn-block" onclick="google_login();">Conectarse por <b>Google</b></button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>

  </div>

  <!-- jquery
		============================================ -->
  <!-- <script src="<?= base_url();?>/public/js/vendor/jquery-1.11.3.min.js"></script> -->
  <!-- bootstrap JS
		============================================ -->
  <script src="<?= base_url();?>/public/js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="<?= base_url();?>/public/js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <!-- <script src="<?= base_url();?>/public/js/jquery-price-slider.js"></script> -->
  <!-- meanmenu JS
		============================================ -->
  <!-- <script src="<?= base_url();?>/public/js/jquery.meanmenu.js"></script> -->
  <!-- owl.carousel JS
		============================================ -->
  <script src="<?= base_url();?>/public/js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <!-- <script src="<?= base_url();?>/public/js/jquery.sticky.js"></script> -->
  <!-- scrollUp JS
		============================================ -->
  <!-- <script src="<?= base_url();?>/public/js/jquery.scrollUp.min.js"></script> -->
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="<?= base_url();?>/public/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?= base_url();?>/public/js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="<?= base_url();?>/public/js/metisMenu/metisMenu.min.js"></script>
  <script src="<?= base_url();?>/public/js/metisMenu/metisMenu-active.js"></script>
  <!-- tab JS
		============================================ -->
  <script src="<?= base_url();?>/public/js/tab.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="<?= base_url();?>/public/js/icheck/icheck.min.js"></script>
  <script src="<?= base_url();?>/public/js/icheck/icheck-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="<?= base_url();?>/public/js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <!-- <script src="<?= base_url();?>/public/js/main.js"></script> -->


  <script>
    let google_login = () => {
      fetch('generar_url', {
          mode: 'no-cors'
        })
        .then(
          function (respuesta) {
            // console.log(respuesta);
            return respuesta.text();
          })
        .then(function (texto) {
          //  console.log(texto);
          open_url(texto);
        })
        .catch(function (error) {
          console.log("Fetch error: ", error);
        });
    }

    let open_url = (url) => {
      // console.log(url);
      const ventana = window.open(
        url,//"https://accounts.google.com/o/oauth2/auth/identifier?response_type=code&access_type=offline&client_id=221049452876-df668u4d2cojj0k890u48a9r3ro4pr56.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2F9no_tetra%2Fproyecto_idgs09%2Fgoogle_login&state&scope=email%20profile%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Ftasks%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Ftasks.readonly&approval_prompt=force&flowName=GeneralOAuthFlow",
        "Google Login", "width=1000, height=900");

      // Setinterval va a verificar cada segundo si la ventana se cerro
      const intervalo = setInterval(
        function () {
          if (ventana.closed !== false) {
            window.clearInterval(intervalo);

            window.location.reload()

            // if(<?php #echo $_SESSION['type_user']?> == 1){
            //   window.location.href="<?php #echo base_url('Admin')?>";
            // }else{
            //   window.location.href="<?php #echo base_url('Inicio')?>";
            // }
            // window.location.href="http://localhost/apptask/inicio";
            // console.log("<?php #echo $_SESSION['profile_pic']?>")
          }

        }, 1000);
    }
  </script>
</body>

</html>