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
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
				<!-- Custom styles  -->
		<link href="assets/css/grid-style.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet prefetch">
         <style>
		 #map {
		 -webkit-filter: grayscale(100%); /* Safari */
    	 filter: grayscale(100%);
		 invert(100%); filter: invert(100%);
		 }
		</style>
	</head>
	<body id="page-top" style="background-color: #000000;">
		<div class="col-lg-12 text-center">
			<?php include 'menu.php';?>
        </div>
		<section id="portfolio">
         <div class="container">
			<div class="row">
            	<div class="col-lg-12 text-center">
                  <div class="section-title">
                  		<br>
                        <br>
                        <br>
						<h2 style="padding-left:5%;">To make a booking, please fill up the form.</h2>
						<br>
                        <br>
                        <br>
                    </div>
                   </div>
				<div style="height: 10%;">
                      <?php if( !empty($user) ): ?>
                </div>
               <!--form start-->   
                <br>
                <br>
                
                <div class="row" style="background-color:#333333;">
                <div class="col-lg-6 text-left" style="background-color:#333; padding-left: 5%;">
                    <div class="row" style="padding-left:5%;">
                        <br>
                     <h2>BOOKING FORM:</h2>
                            <br>
                            <h4><br/>Welcome <?= $user['email']; ?> 
							<br/><br/>You are successfully logged in!
							<br/><br/>
        
                            <br/><br />
                            <a href="logout.php">Logout?</a></h4>
                        <div class="formrow">
                           
                            	<br>
                                <form name="contactform" method="POST" action="contact-form-handler.php" class="form-horizontal" > 
                                <h5>
                                
                                <input type="text" name="name" id="name" placeholder="Name:" required="true" size="35" style=" background-color: #242424; height: 30px; border: 2px solid #7A7A7A; border-radius: 1px; width:57%;">
                                </h5>
                                <h5>
                               
                                <input type="email" name="email" id="email" placeholder="E-mail:" required="true" maxlength="80" size="35" style="background-color: #242424; height: 30px; border: 2px solid #7A7A7A; border-radius: 1px; width:57%;"><br>
                                </h5>
                                <h5>
                                
                                <textarea name="message" id="message" placeholder="Write Your Message Here:" required rows="4" cols="34" style="background-color: #242424; border: 2px solid #7A7A7A; border-radius: 1px; width:57%;"></textarea>
                                </h5>
                                <div style="padding-left:none;">
                                <div class="g-recaptcha" data-sitekey="6Ldwrg0UAAAAAMbRYVzV1OB_gTc71kk1_cNoK-5v" style="width:57%;";></div></div><br>
                                
                                <input id="submit" name="submit" type="submit" value="Submit" class="button button5" style=" background-color: #555555; color: white; border: 2px solid white; border-radius: 1px; width:57%; height: 30px; "><br><br><br>
                                
                                </form>
                          </div>
                      </div><!-- /row -->
                </div> <!--form end--> 
             <div class="col-lg-6 text-left" style="background-color:#333; padding-left: 5%;">
                    <div class="col">
                        <div class="row" style="padding-left:5%;">
                            <br>
                     	 <h2>ADDRESS:</h2>
                            <br>
                                <h4 style="padding-top:none;">Bådehavnsgade 40</h4> 
                                     <h4 style="padding-top:none;">2450 København SV</h4> 
                                     <h4 style="padding-top:none;">Tel.: +45 70 260 601</h4> 
                                     <h4 style="padding-top:none;">Fax.: +45 33 150 634</h4> 
                                </h4>
                                </div>
                                <br><br><br><br>
                                   <div style="padding-left:none;">
                                    <br>
                                    <br><br>
                                    <img src="img/social/no-circle/fb.png" alt="fb"><a href="https://www.facebook.com/Copenhagen-Limousine-Service-60297880809/?fref=ts" style="padding-right:1%;"></a>
                                    <img src="img/social/no-circle/g+.png" alt="fb"><a href="#" style="padding-right:1%;"></a>
                                    <img src="img/social/no-circle/in.png" alt="fb"><a href="#" style="padding-right:1%;"></a>
                                    <img src="img/social/no-circle/lin.png" alt="fb"><a href="#" style="padding-right:1%;"></a>
                                    <img src="img/social/no-circle/tw.png" alt="fb"><a href="#" style="padding-right:1%;"></a>
                                <br><br><br><br><br><br><br>
                                </div>
                    </div> 
                            </div> <!--col end--> 
                            </div> 
                          </div><!--row end-->
                         </div> <!--container end--> 
   		 <?php require 'footer.php';?>
         <br>
         <br>
        
		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/SmoothScroll.js"></script>
		<script src="assets/js/theme-scripts.js"></script>
        <script src="scripts/gen_validatorv31.js" type="text/javascript" language="JavaScript" ></script>
    	<script src='https://www.google.com/recaptcha/api.js'></script>
    
	