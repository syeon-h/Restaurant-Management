<!DOCTYPE html>
<html lang="en">
<title>Employee Schedule</title>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>  
	<link rel="stylesheet" type="text/css" href="style.css">  
</head>  
<body>
	<div class="header">
		<?php include ("header.php");?>  
	</div> 
	
	<h2>Employee Schedule</h2>

<?php
$employeeid = $_POST['employeeid'];

include 'connectdb.php';

$query = "SELECT `date`, `start`, `end` FROM Schedule WHERE WEEKDAY(`date`) NOT IN (5, 6) AND employeeID=".$employeeid.""; 
$result = $connection->query($query);

if ($row = $result->fetch()) {
	echo '<table style="width:40%">'; 
	echo '<tr><th style="width:40%">Date</th><th>Start Time</th><th>End Time</th></tr>'; 
	echo "<tr><td>".$row['date']."</td><td>".$row['start']."</td><td>".$row['end']."</td></tr>"; 
	while ($row = $result->fetch()) {
		echo "<tr><td>".$row['date']."</td><td>".$row['start']."</td><td>".$row['end']."</td></tr>";  
	}
} else { 
	echo "No Schedules to Display"; 
}

$connection = NULL;
?>
	
	</table>

	<div class="footer">
	  <?php include ("footer.php");?>
	</div>

</body>
</html>