<!DOCTYPE html>
<html lang="en">
<title>Order History</title>
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
	<h2>Order History</h2>
	<form action="orderhistory_submit.php" method="post">
	<p>Date: <input type="date" id="orderdate" name="orderdate">
	<input type="submit" value="search">
	</form>
	</p>

	<div class="footer">
	  <?php include ("footer.php");?>
	</div>

</body>
</html>