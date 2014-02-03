<?php // WebIS Test App Copyright 2014 by Timothy Middelkoop License Apache 2.0
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
	
	function testPage() {
		$this->validate("page.php","Hello: WebIS");
		$this->validate("page.php","Answer: 7",array('a'=>3,'b'=>4,'action'=>'Enter'));
		$this->validate("page.php","Answer: 9",array('a'=>1,'b'=>8,'action'=>'Enter'));
	}
	

}

if (!defined('PHPUnit_MAIN_METHOD')) {
	MyTEstCase::main();
}

?>
