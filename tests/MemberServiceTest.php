<?php

use Bandito\Services;
use Slim\Container;

class MemberServiceTests extends PHPUnit_Framework_TestCase {
    
    public function testGetMember() {
        // arrange
        $mockContainer = $this->getMock('Interop\Container\ContainerInterface');     
        $memberService = new Bandito\Services\MemberService($mockContainer); // test fails. Learn about Mocking in PHPUnit
        $expectedJson = '{"id": 1, "name": "Bob Harper", "instrument": "Guitar"}';
        
        // act
        $result = $memberService->getMember(1);
        
        // assert
        $this->assertJsonStringEqualsJsonString($expectedJson, $result);
    }
    
}