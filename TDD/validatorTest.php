<?php
// WebIS validatorTest Copyright 2014 by Timothy Middelkoop License Apache 2.0

require_once 'WebIS/TDD/validator.php';

class MyTestCase extends WebIS\Validator {

	protected static $__CLASS__=__CLASS__;
	
	protected function setUp() {
		$this->project='WebIS/TDD';
		parent::setUp();
	}
	
	function testValidator() {
		## static file
		$this->assertValidHTML("static.html","Static html");
	}
						
}

if (!defined('PHPUnit_MAIN_METHOD')) {
	MyTestCase::main();
}

?>

