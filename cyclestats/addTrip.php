<?php
require_once "lib/Trip.class.php";

/*
$mySQL = "INSERT INTO trip (trip_duration, trip_distance, trip_avg_speed, trip_max_speed, trip_odometer, trip_calories, trip_unit) VALUES (" .
		 ($_POST["hours"] * 3600 + $_POST["minutes"] * 60 + $_POST["seconds"]) . ", " .
		 $_POST["distance"] . ", " .
		 $_POST["avg_speed"] . ", " .
		 $_POST["max_speed"] . ", " .
		 $_POST["odometer"] . ", " .
		 $_POST["calories"] . ", '" .
		 $_POST["unit"] . "')";
*/

$newTrip = new Trip();
$newTrip->setDuration($_POST["hours"] * 3600 + $_POST["minutes"] * 60 + $_POST["seconds"]);
$newTrip->g

$affected =& $myDB->exec($mySQL);

if (PEAR::isError($affected)) {
    die($affected->getMessage());
}

?>