<?php

namespace Bandito\Services;

use Interop\Container\ContainerInterface;

class BaseDataService {
    public $database;
    
    protected function __construct(ContainerInterface $ci){
        $database = $ci->get("db");
    }
}