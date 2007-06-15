<html>
<head>
<title>Add new Trip</title>
</head>
<body>

<h1>Add New Trip</h1>
<br>
<form name="frmNewTrip" action="add_trip.php">
<table>
  <tr>
    <td>unit</td>
    <td>
		<select name="unit">
		  <option value="metric">metric</option>
		  <option value="imperial">imperial</option>
		</select>
	</td>
  </tr>
  <tr>
  	<td>Trip distance</td>
  	<td>
  	  <input type="text" name="distance" size="20">
  	</td>
  </tr>
  <tr>
  	<td>Trip time</td>
  	<td>
  	  <select name="hours">
  	  	<?php for($i = 0; $i < 24; $i++){ ?>
  	    <option value="<?=$i?>" />
  	    <?php } ?>
  	  </select>
  	  <select name="minutes">
  	  	<?php for($i = 0; $i < 60; $i++){ ?>
  	    <option value="<?=$i?>" />
  	    <?php } ?>
  	  </select>
  	  <select name="seconds">
  	  	<?php for($i = 0; $i < 60; $i++){ ?>
  	    <option value="<?=$i?>" />
  	    <?php } ?>
  	  </select>
  	</td>
  </tr>
  <tr>
  	<td>Average speed</td>
  	<td>
  	  <input type="text" name="avg_speed">
  	</td>
  </tr>
  <tr>
  	<td>Maximum speed</td>
  	<td>
  	  <input type="text" name="max_speed">
  	</td>
  </tr>
  <tr>
  	<td>Calories</td>
  	<td>
  	  <input type="text" name="calories">
  	</td>
  </tr>
  <tr>
  	<td>Odometer</td>
  	<td>
  	  <input type="text" name="odometer">
  	</td>
  </tr>
</table>
</form>

</body>
</html>