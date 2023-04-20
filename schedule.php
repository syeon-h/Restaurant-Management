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
include 'connectdb.php';
$query = "SELECT id, first_name, last_name FROM `Employee`"; 
$employee = $connection->query($query); 
?>

	<p>Employee: 
	<form action="schedule_submit.php" method="post"> 
	<select name="employeeid" id="employeeid"> 
	<option value="">Select</option> 
	<?php 
		while($row=$employee->fetch()) {
			echo '<option value="'; 
			echo $row['id']; 
			echo '">'.$row['first_name']." ".$row['last_name'].'</option>'; 
		}
	?> 
	</select>
	<input type="submit" value="search"> 
	</form>
	</p>

	<div class="footer">
	  <?php include ("footer.php");?>
	</div>

</body>
</html>