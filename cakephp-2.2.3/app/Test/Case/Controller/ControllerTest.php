<?php

App::uses('Controller', 'Controller');

class ControllerTest extends CakeTestCase {

    public function setUp() {
    	parent::setUp();
    }

    public function testCase() {
		$jeffIsAwesome = true;
    	$this->assertTrue($jeffIsAwesome);
    }

    public function testCaseAlan() {
		$alanIsAwesome = false;
    	$this->assertTrue($jeffIsAwesome);
    }


}
