<?php 
use Login\Controllers\Login;
$routes->get('/', Login::class . '::index');
