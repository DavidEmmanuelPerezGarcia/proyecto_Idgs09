<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public $session; 
    public function __construct(){
        $this->session = session();
    }

    public function index()
    {
        
        return view('Admin/Inicio/inicio');
    }
    public function inicio()
    {
        
        return view('inicio/Inicio');
    }
    public function archivos()
    {
        return view('inicio/archivos/archivos');
    }
}
