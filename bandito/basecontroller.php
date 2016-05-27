<?php


namespace Bandito\Controllers;

abstract class BaseController {
    public function get($request, $response){
        throw new Exception("GET Method not supported by this resource.");   
    }
    
    public function post($request, $response){
        throw new Exception("POST Method not supported by this resource.");   
    }
    
    public function put($request, $response){
        throw new Exception("PUT Method not supported by this resource.");   
    }
    
    public function delete($request, $response){
        throw new Exception("DELETE Method not supported by this resource.");
    }
}

