<?php 

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\User;


class HomeController  
{ 

   

public function index(Request $request, Response $response)
    {
    $users =  User::find(1);

    var_dump($users->email);
       $response->getBody()->write('hello');

       return $response;
    }

}