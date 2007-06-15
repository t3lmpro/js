<?php
require_once "../lib/Tracker.class.php";
require_once "PHPUnit/Framework.php";


class testTracker extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		//$this->$myTracker = new Tracker();
	}
	
	public function testAddTrip()
	{
		$myTracker = new Tracker();
		$myTrip = new Trip();
		$myTracker->addTrip($myTrip);
		$this->assertEquals(1, $myTracker->getNoTrips());
	}
	
	public function testGetTrips()
	{
		$myTracker = new Tracker();
		$newTrip = new Trip();
		$myTracker->addTrip($newTrip);
	}
}

$myTest = new testTracker();
$myTest->testAddTrip();
$myTest->testGetTrips();

?>