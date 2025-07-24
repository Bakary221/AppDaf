<?php
require_once  '../vendor/autoload.php';
require_once'../app/config/bootstrap.php';
use App\core\Router;

Router::resolveRoute($routes);

// echo "Hello Ousmane, ton projet tourne dans Docker avec NGINX !";

// var_dump($_SERVER['REQUEST_URI']);

