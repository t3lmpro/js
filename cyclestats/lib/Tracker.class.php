<?php
require_once "Trip.class.php";

class Tracker
{
	private $trips;
	
	// Adds a new Trip record to the stats
	public function addTrip(Trip $record)
	{
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
}

?>