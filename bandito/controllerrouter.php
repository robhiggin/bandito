<?php
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\App;

namespace Bandito\Controllers;


class ControllerRouter {
    
    public function route(string $controllerName, Request $request, Response $response, $args){
        $response->getBody()->write("Hello From the Controller Router");
        return response;
    }
    
}


