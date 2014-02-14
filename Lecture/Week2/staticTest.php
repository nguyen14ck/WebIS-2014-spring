<?php // WebIS Test App Copyright 2014 by Timothy Middelkoop License Apache 2.0
require_once 'WebIS/TDD/validator.php';

class MyTestCase extends WebIS\Validator {

	protected static $__CLASS__=__CLASS__;
	
	protected function setUp() {
		$this->project='WebIS/Lecture/Week2';
		parent::setUp();
	}
	
	function testValidator() {
		## static file
		$this->assertValidHTML("static.html","Week2 Test");
	}
						
}

if (!defined('PHPUnit_MAIN_METHOD')) {
	MyTestCase::main();
}

?>
