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
        
        return view('Admin/Inicio/inicio');
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
}
