<!DOCTYPE html>
<html lang="en">
<title>Restaurant Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>  
	<link rel="stylesheet" type="text/css" href="style.css">  
	</head>  
<body>
	<div class="header">
		<?php include ("header.php");?>  
	</div> 
	<img src="img/header.jpg" alt="header" width="700" height="350" class="centre">
	<br>
	<br>
	<div class="row">
	  <div class="column">
		<h2>Order History</h2>
		<a href="orderhistory.php">Order History</a></div>
	  <div class="column">
		<h2>Customer Registration</h2>
		<a href="registration.php">Customer Registration</a></div>
	  <div class="column">
		<h2>Order Stats</h2>
		<a href="orderstats.php">Order Stats</a></div>
	  <div class="column">
		<h2>Employee Schedule</h2>
		<a href="schedule.php">Employee Schedule</a></div>
		<br>
	</div>
	
	<div class="footer">
	  <?php include ("footer.php");?>
	</div>
	
	</body>
</html> 
