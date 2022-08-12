<?php

namespace App\Controllers;
use App\Models\LoginModel;  // Importamos el modelo de login

class AdminController extends BaseController
{
    public $session; 
    public $loginModel;
    public function __construct(){
        $this->session = session();
        $this->loginModel = new LoginModel;
    }

    public function index()
    {
        $data = [];
        $archivos = $this->loginModel->getAllTable("archivos");
        $i = 0;
        foreach($archivos as $a){
            $condicion = [
                'id' => $a["id_user"] 
            ];

            $name_user = $this->loginModel->getAllRow("users",$condicion);
            $archivos[$i]["usuario"] = $name_user["first_name"]." ".$name_user["last_name"];
            $i++;  
        }
        $data["archivos"] = $archivos;
        
        return view('Admin/Inicio/inicio',$data);
    }


    public function vistAddArchivoAdmin(){
        return view('Admin/Inicio/addArchivos');
    }

    public function vistaDepartamentosAdmin(){
        $data = [];
        $departamentos = $this->loginModel->getAllTable("departamentos");
        $data["departamentos"] = $departamentos;
        return view('Admin/Departamentos/departamentos',$data);
    }

    public function vistaAddDepartamentos(){
        return view('Admin/Departamentos/addDepartamentos');
    }

    public function LiestadoUsuarios(){
        $data = [];
        $datosUsers = $this->loginModel->getAllTable("users");
        $data["usuarios"] = $datosUsers;

        return view("Admin/Usuarios/usuarios",$data);
    }

    public function agregar_departamento(){
        echo '<pre>';
        echo print_r($_POST);
        echo '</pre>';

        $data = [
            'nombre' => $_POST["nombre_departamento"],
            'descripcion' => $_POST["desripcion"]
        ];

        $departamento = $this->loginModel->insertGeneral("departamentos",$data);

        return redirect()->to(base_url('departamentos'));
    }

    public function upload(){
        /*$validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,100]'
                    . '|max_dims[userfile,1024,768]',
            ],
        ];

        $img = $this->request->getFile('archivo');

        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/archivos/'.$img->store();

            $data = [
                'nombre' => $_POST["nombre_archivo"],
                'id_user' => $_SESSION["id"],
                'ruta_archivo' => $filepath
            ];

            $addArchivo = $this->loginModel->insertGeneral("archivos", $data);

            return redirect()->to(base_url('Admin'));
        }*/


        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,100]'
                    . '|max_dims[userfile,1024,768]',
            ],
        ];

        $img = $this->request->getFile('archivo');

        $nameImg = $img->getRandomName();
        $img->move(ROOTPATH.'public/archivos/',$nameImg);

        // return view('upload_form', $data);

        $data = [
            'nombre' => $_POST["nombre_archivo"],
            'id_user' => $_SESSION["id"],
            'ruta_archivo' => $nameImg
        ];
        $addArchivo = $this->loginModel->insertGeneral("archivos", $data);
        return redirect()->to(base_url('Admin'));

    }

    // CAMBIAMOS LA CONTRASEÑA DE ADMIN
     public function update_contraseña(){
        
         $condicion=[
             "id"=>$_SESSION["id"]
         ];
         $datos=[
             "password"=>$_POST["password"],
            ];

        // echo '<pre>';
        // echo print_r($condicion);
        // echo '</pre>';
            
        $update_contraseña = $this->loginModel->update_password($condicion,$datos);
        return redirect()->to(base_url('cambiar_contraseña'));


        }



    public function archivos()
    {
        return view('inicio/archivos/archivos');
    }

    public function cambiar_contraseña(){
        return view('Admin/contraseña/inicio');
    }
}
