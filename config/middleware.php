<?php

use Slim\App;
use DI\Container;
use Psr\Http\Server\RequestHandlerInterface;
use  Slim\Psr7\Request;
use  Slim\Psr7\Response;
use Slim\Routing\RouteContext;

return function (App $app) {

  $settings =  $app->getContainer()->get('settings');

  $app->addErrorMiddleware(
    $settings["displayErrorDetails"],
    $settings["logErrors"],
    $settings["logErrorDetails"]
  );


  $app->add(\App\Middleware\CorsMiddleWare::class);

    $app->addRoutingMiddleware();

  $capsule = new \Illuminate\Database\Capsule\Manager;
  $capsule->addConnection($settings['db']);

  $capsule->setAsGlobal();
  $capsule->bootEloquent();


};