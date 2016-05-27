<?php
namespace Bandito\Services;

use Slim\App;
use Slim\Containers;
use Interop\Container\ContainerInterface;

class MemberService extends BaseDataService {
    protected $ci;
    
    public function __construct(ContainerInterface $ci) {
        parent::__construct($ci);
        $this->ci = $ci;
    }
    
    public function getMember($id){
        $db = $this->database;
        return '{"id": ' . $id . ', "name": "Bob Harper", "instrument": "Guitar"}';
    }
    
    
}