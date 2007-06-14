<?php
require_once "../lib/Tracker.class.php";
require_once "PHPUnit/Framework.php";


class testTracker extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
	
	}
	
	public function testReturnInt()
	{
		$myTracker = new Tracker();
		
		$this->assertEquals(32, $myTracker->returnInt());
	}
}

$myTest = new testTracker();
$myTest->setUp();
$myTest->testReturnInt();

?>