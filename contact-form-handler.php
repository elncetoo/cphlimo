<?php 
$errors = '';
$myemail = 'svilena_koleva@yahoo.com';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.php');
} 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Copenhagen Limousine Service Company. Great services for business people, special occasions, crew transportation, celebrities etc worldwide.">
    <meta name="keywords" content="travel, business, mercedes-benz, e-class, s-class, vw multivan, mercedes benz viano, mercedes sprinter minibus, rent a car, transport, party, copenhagen, limousine, transport services, private chauffeurs, worldwide">
    <link rel="icon" href="favicon.ico">
		<title>Copenhagen Limousine Service</title>
		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
				<!-- Custom styles  -->
		<link href="assets/css/grid-style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/form-style.css">
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
                <?php include 'assets/inc/menu.php';?>
            </div>
            <section id="portfolio">
             <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                      <div class="section-title">
                            <br>
                            <br>
                            <br>
                           <!-- This page is displayed only if there is some error -->
                           <h3 style="color:red;">
							<?php echo nl2br($errors); ?>
                            </h3>
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
                <br>
                <div class="row" style="background-color:#2D2D2D;">
                <div class="col-lg-6 text-left" style="background-color:#2D2D2D; padding-left: 8%; padding-right: 6%;">
                    <div class="row" style="padding-left:7%;">
                        <br>
                     <h2>CONTACT US:</h2>
                            <br>
                            <h4 style="color: #B2B1B1;">If you have any questions, suggestions <br />
                                or comments, please feel free to send <br />
                                us an e-mail via the form below.</h4>
                        <div class="formrow">
                           
                                <br>
                                <form name="contactform" method="POST" action="contact-form-handler.php" class="form-horizontal" > 
                                    <h5>
                                    <input type="text" name="name" id="name" placeholder="Name:" required="true" size="35" style="width:70%; border: solid 1px #b3aca7;">
                                    </h5>
                                    <h5>
                                    <input type="email" name="email" id="email" placeholder="E-mail:" required="true" maxlength="80" size="35" style="width:70%; border: solid 1px #b3aca7;"><br>
                                    </h5>
                                    <h5><textarea name="message" id="message" placeholder="Write Your Message Here:" required rows="4" cols="34" style="width:70%; border: solid 1px #b3aca7;"></textarea>
                                    </h5>
                                    <div style="padding-left:none;">
                                    <div class="g-recaptcha" data-sitekey="6Ldwrg0UAAAAAMbRYVzV1OB_gTc71kk1_cNoK-5v" style="width:70%;";></div></div><br>
                                    <input id="submit" name="submit" type="submit" value="SUBMIT" style="width:70%; color: #fff; border: solid 1px #b3aca7;"><br><br><br>
                                </form>
                          </div>
                      </div><!-- /row -->
                </div> <!--form end--> 
             <div class="col-lg-6 text-left" style="background-color:#2D2D2D; padding-left: 5%;">
                    <div class="col">
                        <div class="row" style="padding-left:9%;">
                            <br>
                         <h2>ADDRESS:</h2>
                            <br>
                                <h4 style="padding-top:none;color: #B2B1B1;">Bådehavnsgade 40</h4> 
                                     <h4 style="padding-top:none; color: #B2B1B1;">2450 København SV</h4> 
                                     <h4 style="padding-top:none; color: #B2B1B1;">Denmark</h4> 
                                     <h4 style="padding-top:none; color: #B2B1B1;">Tel.: +45 70 260 601</h4> 
                                     <h4 style="padding-top:none; color: #B2B1B1;">Fax.: +45 33 150 634</h4> 
                                </h4>
                                </div>
                                <br><br><br><br>
                                   <div style="padding-left:5%;">
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
             <?php require 'assets/inc/footer.php';?>
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
        
        
        