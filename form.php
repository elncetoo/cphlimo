<?php

session_start();
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Copenhagen Limousine Service web page">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Copenhagen Limousine Service</title>
		<!-- Bootstrap core CSS -->
		
        <link rel="stylesheet" type="text/css" href="assets/css/form-style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/login-style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>

	<div class="header">
		<?php include 'menu.php';?>
	</div>

	<?php if( isset($_SESSION['user_id']) ): ?>
		<br>
        <br>
        <br>
		<br/><h2>Welcome <?= $_SESSION['user_name']; ?>, </h2>  
		 <h3 style="color:#D8D7D7;">You are successfully logged in and now you may proceed with the booking form. </h3>
		<br/><br/>
        
        <form action="form_handler.php" method="POST" class="topBefore">
		
            <input id="f_name" type="text" placeholder="First Name" name="f_name" required="true" style="height:30px; border-radius:0px;">
            <input id="l_name" type="text" placeholder="Last Name" name="l_name" required="true" style="height:30px; border-radius:0px;">
            <input id="email" type="text" placeholder="Your Email" name="email" required="true" style="height:30px; border-radius:0px;">
            <input id="company" type="text" placeholder="Company" name="company" style="height:30px; border-radius:0px;"> 
            <input id="phone" type="text" placeholder="Your Phone" name="phone" required="true" style="height:30px; border-radius:0px;"> <br>
            <input id="car_model" type="text" placeholder="Which model car do You choose?" name="car_model" required="true" style="height:30px; border-radius:0px;">
            <input id="nr_cars" type="text" placeholder="How many cars?" name="nr_cars" required="true" style="height:30px; border-radius:0px;">
            <input id="nr_passangers" type="text" placeholder="For how many people?" name="nr_ppl" style="height:30px; border-radius:0px;">
            
            <input id="destination" type="text" placeholder="Do you have a specific destination?" name="destination" style="height:30px; border-radius:0px;">
            <input id="descr" type="text" placeholder="Anything else in addition?" name="descr" required="true" style="height:60px; border-radius:0px;" ><br>
            <input id="submit" type="submit" value="SUBMIT" style="height:60px; border-radius:0px;">

		</form>
   
   <br><br> 
		<h2><a href="logout.php" style="text-decoration:none;">Logout?</a></h2>

	<?php else: ?>
		<br>
        <br>
        <br><br>
        <br>
        <br>
		<h1>Please <a href="login.php" style="text-decoration:none;">Login</a> or <a href="register.php" style="text-decoration:none;">Register</a></h1>
		 
	<?php endif; ?>
    <br /><br /><br /><br /><br /><br />
<?php require 'footer.php';?>
</body>
</html>