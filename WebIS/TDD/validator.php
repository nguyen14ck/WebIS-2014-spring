<?php 
// WebIS validator Copyright 2014 by Timothy Middelkoop License Apache 2.0
// phpunit --include-path=../WebIS .
namespace WebIS;

require_once 'PHPUnit/Autoload.php';
require_once 'HTTP/Request2.php';

abstract class Validator extends \PHPUnit_Framework_TestCase {

	static $tidy="\\WebIS\\bin\\tidy.exe";
	static $tidyoptions="-errors -quiet -utf8";
	static $workspace="/WebIS/workspace";
	static $web="http://localhost:8000";

	protected function setUp() {
		if(!isset($this->project)){
			$this->project='/';
		}
		parent::setUp();
	}
	
	function testTidy() {
		exec(self::$tidy." --version",$output,$return);
		$this->assertContains("HTML Tidy for HTML5",$output[0]);
	}
	
	/**
	 * PHPUnit test validation of a page, returns rendered page.
	 * @param string $file to be validated
	 * @param array $variables to pass via GET
	 * @param string $contains simple verfication that page loaded
	 * @return string the entire doc for additional processing
	 */
	function validate($file,$contains='</html>',$variables=array()){
		# parent declared variables
		$web=self::$web;
		$tidy=self::$tidy;
		$tidyoptions=self::$tidyoptions;
		
		## Get document
		$url="$web/$this->project/$file";
		$request=new \HTTP_Request2($url, \HTTP_Request2::METHOD_GET);
		$request->getURL()->setQueryVariables($variables);
		$doc=$request->send()->getBody();

		## Verify server is running and content exists fist
		$this->assertContains($contains,$doc,$url);
		
		## Call validator

		# open
		$fdspec = array(
				0 => array("pipe", "r"), // stdin
				1 => array("pipe", "w"), // stdout
				2 => array("pipe", "w")  // stderr
		);
		$proc = proc_open("$tidy $tidyoptions",$fdspec,$fd);

		# write write document
		fwrite($fd[0],$doc);
		fclose($fd[0]); # finsh write before read.
		
		# read result
		fwrite(STDERR,stream_get_contents($fd[1]));
		fclose($fd[1]);				
		fwrite(STDERR,stream_get_contents($fd[2]));
		fclose($fd[2]);
		
		# close
		$return = proc_close($proc);
		
		# report
		$this->assertEquals(0,$return);
		
		return $doc; // return doc for further processing
	}
						
	protected function tearDown() {
		parent::tearDown();
	}

	// Static loader, must be called from subclass (see Test/TDD/validatorTest.php for example)
	static function main() {
		## Subclass must declare 'protected static $__CLASS__'
		$suite = new \PHPUnit_Framework_TestSuite(static::$__CLASS__);
		$parameters=array('verbose'=>TRUE);
		\PHPUnit_TextUI_TestRunner::run($suite,$parameters);
	}
}

?>

