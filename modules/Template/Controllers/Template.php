<?php
namespace Modules\Template\Controllers;
use \CodeIgniter\Controller;
class Template extends Controller
{
    public function index()
    {
       return view('\Modules\Template\Views\v_backend');
    }
}
