<?php

use Slim\App;
use DI\Container;


return function (App $app) {
    
  $settings =  $app->getContainer()->get('settings');
   
  $app->addErrorMiddleware(
    $settings["displayErrorDetails"],
    $settings["logErrors"],
    $settings["logErrorDetails"]
  );

   

  $capsule = new \Illuminate\Database\Capsule\Manager;
  $capsule->addConnection($settings['db']);

  $capsule->setAsGlobal();
  $capsule->bootEloquent();


};