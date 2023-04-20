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

	<table style="width:50%">
	<tr>
		<th style="width:20%">First Name</th>
		<th style="width:20%">Last Name</th> 
		<th>Items</th>
		<th style="width:10%">Total</th>
		<th style="width:10%">Tip</th>
		<th style="width:20%">Delivery</th>
	</tr> 

<?php
include 'connectdb.php';

$orderdate = $_POST['orderdate'];
echo "Date: ".$orderdate."";  
$query = "SELECT orderID, Customer.first_name AS cfname, Customer.last_name AS clname, menu, total_amount, tip, Employee.first_name FROM (`Order` JOIN Customer ON customerID=email LEFT JOIN Order_detail ON `Order`.id=orderID LEFT JOIN Employee ON deliveryID=Employee.ID) WHERE order_date='$orderdate'";
$result = $connection->query($query); 

$comp=0; 
while ($row = $result->fetch()) {
	if ($comp == $row["orderID"]) {
		echo "<tr><td></td>
					<td></td>
					<td>".$row["menu"]."</td>
					<td></td>
					<td></td>
					<td></td></tr>"; 
	} else { 
		echo "<tr><td>".$row["cfname"]."</td>
					<td>".$row["clname"]."</td>
					<td>".$row["menu"]."</td>
					<td>".$row["total_amount"]."</td>
					<td>".$row["tip"]."</td>
					<td>".$row["first_name"]."</td></tr>";
		$comp=$row["orderID"]; 
	}
}

$connection = NULL;
?>
	</table>

	<div class="footer">
	  <?php include ("footer.php");?>
	</div>

</body>
</html>