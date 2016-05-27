<?php


namespace Bandito\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\App;
use Slim\Containers;
use Interop\Container\ContainerInterface;


class MemberController {
    protected $memberService;
    
    public function __construct(\Slim\Container $ci){
        $this->ci = $ci;
        $this->memberService = $ci->get("MemberService");
    }
    
    public function get($request, $response, $args){
        $params = explode("/", $args["params"]);
        
        $result = $this->memberService->getMember($params[0]);
        
        $response->getBody()->write($result);
        return $response;
    }
    
    
}