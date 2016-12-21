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
	
	/*php goes here*/

	function mysql_escape_mimic($inp) { 
		if(is_array($inp)) 
			return array_map(__METHOD__, $inp); 
	
		if(!empty($inp) && is_string($inp)) { 
			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp); 
		} 
	
		return $inp; 
	} 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Copenhagen Limousine Service Company. Great services for business people, special occasions, crew transportation, celebrities etc worldwide.">
		<meta name="keywords" content="travel, business, mercedes-benz, e-class, s-class, vw multivan, mercedes benz viano, mercedes sprinter minibus, rent a car, transport, party, copenhagen, limousine, transport services, private chauffeurs, worldwide">
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

	<?php if( !empty($user) ): ?>
		<br>
        <br>
        <br>
		<br/>Welcome <?= $user['f_name']; ?> 
		
		<br/><br/>
        
           
       <?
	   
		    // Enter the new user in the database
	$sql = "INSERT INTO cphlimo.form (f_name, l_name, email, company, phone, car_model, nr_cars, ppl, destination, descr) VALUES (:f_name, :l_name, :email, :company, :phone, :car_model, :nr_cars, :ppl, :destination, :descr)";
	$stmt = $conn->prepare($sql);
	$password=password_hash($_POST['password'], PASSWORD_BCRYPT);
	
	$stmt->bindParam(':f_name', $f_name);
    $stmt->bindParam(':l_name', $l_name);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':company', $company);
	$stmt->bindParam(':phone', $phone);
	$stmt->bindParam(':car_model', $car_model);
	$stmt->bindParam(':nr_cars', $nr_cars);
    $stmt->bindParam(':ppl', $ppl);
    $stmt->bindParam(':destination', $destination);
    $stmt->bindParam(':descr', $descr);
	
	if( $stmt->execute() ):
		$message = '<h2 style="padding-left: 2%; color:#09F08F;">Form submited. We will conatact you as soon as possible with fconformation.</h2><br><br><br>';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;
	}
endif; 
	   ?>
        <br /><br />
		<a href="logout.php">Logout?</a>

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