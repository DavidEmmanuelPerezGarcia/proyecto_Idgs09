<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        return view('Admin/Inicio/inicio');
    }
}
