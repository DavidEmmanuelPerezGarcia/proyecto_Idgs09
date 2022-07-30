<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function login()
    {
        echo 'prueba';
        return view('Login/login');
    }
}
