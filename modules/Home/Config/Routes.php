<?php 
use Home\Controllers\Home;
$routes->get('home', Home::class . '::index');
