<!DOCTYPE html>
<html lang="en">
<title>Order Stats</title>
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
	<h2>Order Stats</h2>

	<table style="width:20%">
	<tr><th style="width:60%">Date</th><th>Orders</th></tr> 

<?php
include 'connectdb.php';

$result = $connection->query("SELECT DISTINCT order_date, count(id) AS numorder FROM `Order` GROUP BY order_date"); 

while ($row = $result->fetch()) {
	echo "<tr><td>".$row["order_date"]."</td><td>".$row["numorder"]."</td></tr>";
	
}

$connection = NULL;
?>
	</table>

	<div class="footer">
	  <?php include ("footer.php");?>
	</div>

</body>
</html>