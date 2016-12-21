<?php

$link = mysqli_connect("localhost", "root", "root", "cphlimo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$f_name = mysqli_real_escape_string($link, $_POST['f_name']);
$l_name = mysqli_real_escape_string($link, $_POST['l_name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$company = mysqli_real_escape_string($link, $_POST['company']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$car = mysqli_real_escape_string($link, $_POST['car']);
$nr_cars = mysqli_real_escape_string($link, $_POST['nr_cars']);
$ppl = mysqli_real_escape_string($link, $_POST['ppl']);
$destination = mysqli_real_escape_string($link, $_POST['destination']);
$descr = mysqli_real_escape_string($link, $_POST['descr']);

$message = '<h2 style="padding-left: 2%; color:#09F08F;">Form submitted. We will contact you as soon as possible with conformation.</h2><br><br><br>';
 
// attempt insert query execution
$sql = "INSERT INTO form (f_name, l_name, email, company, phone, car, nr_cars, ppl, destination, descr) VALUES ('$f_name', '$l_name', '$email', '$company', '$phone', '$car', '$nr_cars', '$ppl', '$destination', '$descr')";

if(mysqli_query($link, $sql)){
  $message = '<h2 style="padding-left: 2%; color:#09F08F;">Form submitted. We will contact you as soon as possible with conformation.</h2><br><br><br>';
} else{
  $message = 'ERROR: Could not able to execute $sql. ' . mysqli_error($link);
}


 
// close connection
mysqli_close($link);
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
		
        <link rel="stylesheet" type="text/css" href="assets/css/login-style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>

	
	<?php include 'assets/inc/menu.php';?>
	<br><br>
	    <div class="container-fluid">
		   <div class="row">
			<img src="img/header.jpg" class="img-responsive" style="width:100%; padding-top: none; background-repeat: no-repeat;">
		   </div>
		</div>
	
	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>


		<br>
        <br>
		<br>
        <br>


<?php require 'assets/inc/footer.php';?>
