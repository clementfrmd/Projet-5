<?php
require ("../app/Autoloader.php");
use App\Autoloader;
use App\Libs\Router;

session_start();

$autoloader = new Autoloader;
$autoloader->register();


$router = new Router;
$router->routerRequest();