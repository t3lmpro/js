<?php
require_once "../lib/Tracker.class.php";

class testTracker
{
	private $myTracker;
	
	public function setUp()
	{
		$myTracker = new Tracker();
	}
	
	
}

$myTest = new testTracker();
$myTest->setUp();


?>