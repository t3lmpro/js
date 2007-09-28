<?php
require_once "DBI.class.php";
require_once "Trip.class.php";

class Tracker
{
	/** Test */
	private $trips;
	private $dbi;
	
	// Adds a new Trip record to the stats
	public static function addTrip(Trip $record)
	{
		$dbi = new DBI();
		
		$this->trips[] = $record;
	}
	
	// Returns the number of trips
	public function getNoTrips()
	{
		return sizeof($this->trips);
	}
	
	public function getTrips()
	{
		return $this->trips;
	}
	
	public function getTrips($tripId)
	{
		
	}
}

?>