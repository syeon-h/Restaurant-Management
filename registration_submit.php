<!DOCTYPE html>
<html lang="en">
<title>Customer Registration</title>
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
   <h2>Customer Registration</h2>
	
<?php

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$pc = $_POST['postalcode'];
$phone = $_POST['phone'];

include 'connectdb.php'; 

$query = "SELECT * FROM Customer WHERE email='$email'"; 
$result = $connection->query($query); 
$num = $result->fetch(); 

if ($num) {
   echo "Already Registered Email"; 
   die(); 
} 

$query = "INSERT INTO Customer VALUES (:email, :street, :city, :pc, :first_name, :last_name, :phone)";
$stmt = $connection->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':street', $street);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':pc', $pc);
$stmt->bindParam(':first_name', $fname);
$stmt->bindParam(':last_name', $lname);
$stmt->bindParam(':phone', $phone);
$result = $stmt->execute();

if ($result == true) {
   $query1 = "INSERT INTO Payment VALUES ('$email', default, default, default)"; 
   $connection->query($query1); 
   echo "Registration Succeed"; 
}
else {
   echo "Registration Failed"; 
}

$connection = NULL;

?>

   <div class="footer">
	  <?php include ("footer.php");?>
	</div>

</body>
</html>