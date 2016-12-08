<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	$email =$_POST['email'];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		echo "Invalid email format"; 
	}		 
	else {	
	
		// Enter the new user in the database
		$sql = "INSERT INTO cphlimo.users (username, email, password, f_name, l_name, company) VALUES (:username, :email, :password, :f_name, :l_name, :company)";
		$stmt = $conn->prepare($sql);
		$password=password_hash($_POST['password'], PASSWORD_BCRYPT);
		$username =$_POST['username'];
		$f_name =$_POST['f_name'];
		$l_name =$_POST['l_name'];
		$company =$_POST['company'];
				
		
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':f_name', $f_name);
		$stmt->bindParam(':l_name', $l_name);
		$stmt->bindParam(':company', $company);
		
		if( $stmt->execute() ):
			$message = '<h2 style="padding-left: 2%; color:#09F08F;">Successfully created new user, please proceed to <a href="login.php" style="text-decoration:none;">login page</a>.</h2><br><br><br>';
		else:
			$message = 'Sorry there must have been an issue creating your account';
		endif;
	}
endif;


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
<body style="background-color: #000000;">
<heade>
	<div class="col-lg-12 text-center" style="margin-top:none; padding-top:none;">
			<?php include 'menu.php';?>
        </div>
</header>
	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<h1>Back to <a href="login.php" style="text-decoration:none;">Login </a>or Register below:</h1><br>
	

	<form action="register.php" method="POST" class="topBefore">
		
        <input id="username" type="text" placeholder="Username" name="username" required="true" style="height:30px; border-radius:0px;">
		<input id="email" type="text" placeholder="Your Email" name="email" required="true" style="height:30px; border-radius:0px;">
        <input id="confirm_email" type="text" placeholder="Confirm Email" name="confirm_email" required="true" style="height:30px; border-radius:0px;">
		<input id="password" type="password" placeholder="Password" name="password" required="true" style="height:30px; border-radius:0px;">
		<input id="confirm_password" type="password" placeholder="Confirm Password" name="confirm_password" required="true" style="height:30px; border-radius:0px;"><br>
        <input id="f_name" type="text" placeholder="First Name" name="f_name" style="height:30px;border-radius:0px;">
        <input id="l_name" type="text" placeholder="Last Name" name="l_name" style="height:30px; border-radius:0px;"> 
        <input id="company" type="text" placeholder="Company" name="company"   style="height:30px; border-radius:0px;"> 
       	<input id="submit" type="submit" value="SUBMIT" style="height:60px; border-radius:0px;">

	</form>
   
   <br><br> <br><br>
       
<?php require 'footer.php';?>
