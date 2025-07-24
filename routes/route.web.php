<?php

use App\controller\CitoyenController;

$routes = [
    '/{cin}' => [
        'controller' => CitoyenController::class,
        'method' => 'login'
    ]
]; 