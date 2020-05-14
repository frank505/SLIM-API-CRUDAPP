<?php

use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;
use Respect\Validation\Validator as v;

require_once __DIR__ . '/../vendor/autoload.php';

$container = new Container();

$settings = require __DIR__.'/settings.php';


 
$settings($container);

  
$app = SlimAppFactory::create($container);


// Register middleware
$middleware = require __DIR__ . '/middleware.php';
 
$middleware($app);

// Register routes
$routes = require __DIR__ . '/routes.php';

$routes($app);


 $app->run();