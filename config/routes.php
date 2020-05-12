<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use App\Controllers\HomeController;


return function (App $app) {
   
    $app->get('/', [HomeController::class, 'index']);
};   

