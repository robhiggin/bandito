<?php
namespace Bandito\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\App;
use Slim\Containers;
use Interop\Container\ContainerInterface;

class BandController {
    protected $ci;
    
    public function __construct(ContainerInterface $ci){
        $this->ci = $ci;
    }
    
    public function get($request, $response, $args){
        $params = explode("/", $args["params"]);
        $response->getBody()->write("Hello From the Band Controller (" . $params[1] . ")");
        return $response;
    }
    
    
}