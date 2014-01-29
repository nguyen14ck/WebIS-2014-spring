<?php

require_once 'WebIS/TDD/validator.php';
require_once 'calc.php';

class MyTestCase extends WebIS\Validator {

	protected static $__CLASS__=__CLASS__;
	
	protected function setUp() {
		$this->project='First';
		parent::setUp();
	}

	function testCalculator(){
		$this->assertEquals(7,Calculator::add(3,4));
		$this->assertEquals(7,Calculator::add(4,3));
	}
						
}

if (!defined('PHPUnit_MAIN_METHOD')) {
	MyTEstCase::main();
}

?>
