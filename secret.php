<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shhh!!! It`s a Secret Page..</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		<?php include 'menu.php';?>
	</div>

	<?php if( !empty($user) ): ?>



<br><br><br>
		<br />Welcome <?= $user['email']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br />
        <img src="img/two-thumbs-up.jpg" alt="buble" style="width:30%;height:30%;">
       <br /><br />
		<a href="logout.php">Logout?</a>

	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>
    <br /><br /><br /><br /><br /><br />
<?php require 'footer.php';?>
</body>
</html>