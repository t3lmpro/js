<?php

// Class that represents a single Trip record
class Trip
{
	private $distance = 0;
	private $time = 0;
	private $avgSpeed = 0;
	private $maxSpeed = 0;
	private $calories = 0;
	private $odometer = 0;
	private $unit = "km";
	
	public function setDistance($value = 0)
	{
		$this->distance = $value;
	}
	
	public function getDistance()
	{
		return $this->distance;
	}
	
	public function setTime($value)
	{
		$this->time = $value;
	}
	
	public function getTime()
	{
		return $this->time;
	}
	
	public function setAvgSpeed($value)
	{
		$this->avgSpeed = $value;
	}
	
	public function getAvgSpeed()
	{
		return $this->avgSpeed;
	}
	
	public function setMaxSpeed($value)
	{
		$this->maxSpeed = $value;
	}
	
	public function getMaxSpeed()
	{
		return $this->maxSpeed;
	}
	
	public function setCalories($value)
	{
		$this->calories = $value;
	}
	
	public function getCalories()
	{
		return $this->calories;
	}
	
	public function setOdometer($value)
	{
		$this->odometer = $value;
	}
	
	public function getOdometer()
	{
		return $this->odometer;
	}
}

?>