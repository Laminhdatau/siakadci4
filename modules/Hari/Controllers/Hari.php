<?php

namespace Modules\Hari\Controllers;

use CodeIgniter\Controller;

class Hari extends Controller
{
    public function index()
    {
       

        return view('\Modules\Hari\Views\v_hari');
    }
}
