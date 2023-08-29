<?php

namespace Modules\Home\Controllers;

use CodeIgniter\Controller;
use Modules\Template\Controllers\Template;

class Home extends Controller
{
    protected $temp;

    public function index()
    {
        // $a['layout'] = 'v_home';
        // $a['modules'] = 'home';

        
        // $temp = new Template();
        // echo $temp->index($a);
        return view('\Modules\Home\Views\v_home');
    }
}
