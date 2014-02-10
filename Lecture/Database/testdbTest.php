<?php // WebIS Test App Copyright 2014 by Timothy Middelkoop License Apache 2.0
require_once 'WebIS/TDD/validator.php';

class MyTestCase extends WebIS\Validator {

	protected static $__CLASS__=__CLASS__;

	protected function setUp() {
		$this->project='WebIS/Lecture/Database';
		parent::setUp();
	}
	
	function testPage() {
		$this->assertValidHTML("testdb.php","<td>2</td><td>世界</td>");
	}

}

if (!defined('PHPUnit_MAIN_METHOD')) {
	MyTEstCase::main();
}

?>
