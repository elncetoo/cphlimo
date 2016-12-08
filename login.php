<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: form.php");
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT id,username,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id'];
		$_SESSION['user_name'] = $results['username'];
		header("Location: form.php");

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>

<!DOCTYPE html>
<html>
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

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<h1>Login or <a href="register.php" style="text-decoration:none;">Register here</a></h1>
   

	<form action="login.php" method="POST"  class="topBefore">
		
		<input type="text" placeholder="Enter your email" name="email" id="username" style="height:30px; border-radius:0px;">
		<input type="password" placeholder="and password" name="password"  id="password" style="height:30px; border-radius:0px;">
		<input id="submit" type="submit" value="SUBMIT" style="height:60px; border-radius:0px;">

	</form>
<?php require 'footer.php';?>
</body>
</html>