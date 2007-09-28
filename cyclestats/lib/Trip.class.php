<?php
/**
 * This file contains Trip class
 * @author Polad Mirzayev <polad.mirzayev@gmail.com>
 * @copyright Copyright (c) 2007, Polad Mirzayev
 * @version 1.0
 * @package cyclestats
 */

/**
 * Class that represents a single Trip record
 * @package cyclestats
 */
class Trip
{
	/** @var Integer Contains trip date in Unix timestamp format */
	private $tripdate;
	/** @var Integer Contains trip distance */
	private $distance = 0;
	/** @var Integer Contains trip duration in seconds */
	private $duration = 0;
	/** @var Integer Contains trip average speed */
	private $avgSpeed = 0;
	/** @var Integer Contains trip maximum speed */
	private $maxSpeed = 0;
	/** @var Integer Contains number of calories burnt */
	private $calories = 0;
	/** @var Integer Contains odometer readings displaying total distance of all trips travelled so far */
	private $odometer = 0;
	/** @var String contains value showing measurement system being used for the trip data */
	private $unit = "m";
	/** @var Bike Contains an object describing which bike was used during the trip */
	private $bike;
	
	/**
	 * Public method for setting trip distance
	 * @param Integer $value Total distance of trip
	 */
	public function setDistance($value = 0)
	{
		$this->distance = $value;
	}
	
	/**
	 * Public method for getting trip distance
	 * @return Integer
	 */
	public function getDistance()
	{
		return $this->distance;
	}

	/**
	 * Method for setting trip duration
	 * @param Integer $value Duration of trip in seconds
	 */
	public function setDuration($value)
	{
		$this->duration = $value;
	}
	
	public function getDuration()
	{
		return $this->duration;
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