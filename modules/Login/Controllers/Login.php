<?php

namespace Modules\Login\Controllers;

use \CodeIgniter\Controller;
// use \Modules\Login\Views;

class Login extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'layout' => 'v_home',
            'modules' => 'home',
        ];
        return view('Modules\Login\Views\v_login', $data);
    }
}
