<?php 

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\Controller;


class HomeController  
{ 

public function index(Request $request, Response $response)
    {
       $response->getBody()->write('hello');

       return $response;
    }

}