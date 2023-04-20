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
	
   <form action="registration_submit.php" method="post"> 
     <p>First name: </p>
     <input type="text" id="firstname" name="firstname" maxlength="50"> 
     <p>Last name: </p>
     <input type="text" id="lastname" name="lastname" maxlength="50">
     <p>Email: </p>
     <input type="text" id="email" name="email" maxlength="50">
     <p>Street Address: </p>
     <input type="text" id="street" name="street" maxlength="50">
     <p>City: </p>
     <input type="text" id="city" name="city" maxlength="50">
     <p>Postal Code: </p>
     <input type="text" id="postalcode" name="postalcode" maxlength="6">
     <p>Phone: </p>
     <input type="text" id="phone" name="phone" maxlength="10">
     <br>
     <input type="submit" value="register">
   </form> 

   <div class="footer">
	  <?php include ("footer.php");?>
	</div>
   
</body>
</html>