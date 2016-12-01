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
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet prefetch">
		<!-- Custom styles  -->
		<link href="assets/css/grid-style.css" rel="stylesheet">
        <link href="assets/css/style-btn.css" rel="stylesheet">
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
						<h2>Where to find us..</h2>
						<br>
                        <br>
                        <br>
                    </div>
                    
                 </div>
				<div style="height: 10%;">
                      <div id="map">
                         <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2250.631186315046!2d12.597055215926957!3d55.66062348052871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652534f18d55c95%3A0x9347b86e171e1982!2sKornblomstvej+2%2C+2300+K%C3%B8benhavn+S!5e0!3m2!1sen!2sdk!4v1480515431815" width="100%" height="400px" frameborder="0" style="border:0; " allowfullscreen> </iframe>
                      </div>
                </div>
               <!--form start-->   
                <br>
                <div class="col-lg-6 text-left" style="background-color:#333;">
                    <div class="row">
                        
                    </div>     
               <br>
                <div class="col-lg-6 text-left" style="background-color:#333; padding-left: 5%;">
                    <div class="row">
                        <div class="formrow">
                            <h2>CONTACT US:</h2>
                            
                            	<br>
                                <form method="POST" class="form-horizontal" name="contactform" action="contact-form-handler.php"> 
                                <h5>
                                
                                <input type="text" name="name" id="name" placeholder="Name:" size="34" style="height: 30px;">
                                </h5>
                                <h5>
                               
                                <input type="text" name="email" id="email" placeholder="E-mail:" size="34" style="height: 30px;"><br>
                                </h5>
                                <h5>
                                
                                <textarea name="message" id="message" placeholder="Write Your Message Here:" rows="4" cols="34"  ></textarea>
                                </h5>
                                <input type="submit" value="Submit" class="button button5" style=" background-color: #555555; color: white; border: 2px solid white; width:100%; height: 30px; "><br><br><br>
                                </form>
                          </div>
                      </div><!-- /row -->
                </div> <!--form end--> 
                            </div> <!--row end--> 
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
        
    	<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
    
    
	