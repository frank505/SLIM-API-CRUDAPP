<?php
use \Psr\Container\ContainerInterface;
use Slim\App;
  

return function(ContainerInterface $container) 
{

    $container->set('settings',function()
    {
        $db = require __DIR__."/database.php";
        
      return [
        'displayErrorDetails'=>true,
        'logErrors'=>true,
        'logErrorDetails'=>true,
         "determineRouteBeforeAppMiddleware" => true,
        'db' => $db
      ];
    });

};   




   