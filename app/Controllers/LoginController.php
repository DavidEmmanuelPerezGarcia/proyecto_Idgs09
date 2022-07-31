<?php

namespace App\Controllers;
use App\Models\LoginModel;  // Importamos el modelo de login

class LoginController extends BaseController
{

    public $session;        // Variable para la session del usuario
    public $loginModel;     // Variable para el modelo del login
    public $google_client;  // Variable para la configuracion de la API de google

    // Creamos la funcion construct, que es lo primero que se ejecuta el controlador

    public function __construct(){
        // Asignamos el modelo a la variable
        $this->loginModel = new LoginModel();
        // Creamos la session
        $this->session = session();

        // Importamos la libreria autoload
        require_once APPPATH."libraries/vendor/autoload.php";

        //creamos el cliente de google, es un objeto de la clase google cliente que viene de la libreria de google, lo que quiere decir es que vou a poder utilizar todos los metodos de la API
        $this->google_client = new \Google_Client();

        // Agregamos el id del cliente que hace referencia al proyecto que creamos en el google developers console
        $this->google_client->setClientId('221049452876-df668u4d2cojj0k890u48a9r3ro4pr56.apps.googleusercontent.com');
        // Agregamos la clave secreta
        $this->google_client->setClientSecret('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');

        //URI para redireccionar 
        $this->google_client->setRedirectUri(base_url().'/google_login');

        //colocamos los permisos que colocamos en la consola de google developers
        $this->google_client->addScope('email');
        $this->google_client->addScope('profile');

        $this->google_client->addScope('https://www.googleapis.com/auth/tasks');
        $this->google_client->addScope('https://www.googleapis.com/auth/tasks.readonly');

        //Colocamos el tipo de acceso a la api
        $this->google_client->setAccessType('offline');

        //Preguntar al usuario si desea dar permisos de que mi aplicacion acceda a su cuenta de google
        $this->google_client->setApprovalPrompt('force');
    }


    public function login()
    {
        return view('Login/login');
    }

    public function generar_url(){
        if(!$this->session->get('access_token')){
            // Este metodo me crea el codigo para acceder a la API
            $code = $this->google_client->createAuthUrl();
            return $code;
        }
    }

    public function google_login(){
        //si ya hemos iniciado session y existen datos en la variable google_user
        if(session()->has('google_user')){
            echo '<script>window.close();</script>';

            // return view('Admin/Inicio/inicio');
        }else{
            //obtenemos el codigo que viene de la URL
            $code = $this->request->getVar('code');

            if($code){

                //generamos el token mediante el codigo que viene en la URL
                $token = $this->google_client->fetchAccessTokenWithAuthCode($code);

                // var_dump($token);
                //si no existe algun error con la generacion del token 
                if(!isset($token["error"])){
                    //entonces generamos el acceso
                    $this->google_client->setAccessToken($token);

                    //guardamos el token en la variable de session (nombre, variable, valos)
                    $this->session->set('token',$token);
                    $this->session->set('access_token', $token["access_token"]);
                    // var_dump($token);

                    //mandamos llamae un metodo para extraer la informacion del ususario.
                    $google_service = new \Google_Service_Oauth2($this->google_client);
                    
                    //obtenemos la infromacion en variables
                    $gdatos = $google_service->userinfo->get();


                    // var_dump($gdatos);
                    // esto solo es para mostrar los datos mas ordenados
                    // echo '<pre>';
                    // echo print_r($gdatos);
                    // echo '<pre>';

                    if($this->loginModel->usuarioGoogleExiste($gdatos['id'])){
                        //si ya existe el usuario, actualizamos sus datos en la base de datos.
                        $usuarioDatos = [
                            'first_name' => $gdatos["givenName"],
                            'last_name' => $gdatos["family_name"],
                            'email' => $gdatos["email"],
                            'profile_pic' => $gdatos["picture"],
                            'updated_at' => date("Y-m-d H:i:s")
                        ];

                        //actualizamos los datos 
                        $this->loginModel->actualizarUsuarioGoogle($usuarioDatos,$gdatos["id"]);

                    }else{
                        //si no existe el usuario
                        $usuarioDatos = [
                            'oauth_id' => $gdatos["id"],
                            'first_name' => $gdatos["givenName"],
                            'last_name' => $gdatos["family_name"],
                            'email' => $gdatos["email"],
                            'profile_pic' => $gdatos["picture"],
                            'created_at' => date("Y-m-d H:i:s")
                        ];

                        //Creamos el usuario
                        $this->loginModel->crearUsuarioGoogle($usuarioDatos);
                    }
                    $arrayLogin = [
                        'first_name' => $gdatos["givenName"],
                        'last_name' => $gdatos["family_name"],
                        'email' => $gdatos["email"],
                        'profile_pic' => $gdatos["picture"]
                    ];   

                    // $this->session->set('google_user',$gdatos); //ESTO NO SE PARA QUE ES 


                    $arrayLogin = $this->loginModel->dataUser($gdatos["id"]);
                     echo '<pre>';
                    echo print_r($arrayLogin);
                    echo '<pre>';
                    $this->session->set($arrayLogin); // 
                    // echo $_SESSION["first_name"];

                }
            }

            //Cerrar la ventana
            echo '<script>window.close();</script>';


        }
    }
}
