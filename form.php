<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: form.php");
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id'];
		header("Location: form.php");

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>
<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Form</title>
</head>

<body>

    <header class="body">
        <div class="col-lg-12 text-center">
			<?php include 'menu.php';?>
        </div>
    </header>
    		<?php if( !empty($user) ): ?>
            
        <br>
        <br>
        <br>
		<br/><h2>Welcome <?= $user['email']; ?></h2>
		<br/><br/><h2 style="padding-left:5%;">You are successfully logged in! To request a booking, please fill up the form below.</h2>
		<br/><br/>

    <section class="body">
        <form action="insert.php" method="post">
            
        <input name="client_name" placeholder="First Name" required="true">
         
        <input name="client_surname_name" placeholder="Last Name" required="true">       
       
        <input name="client_address" type="text" placeholder="Address">
        
        <input name="client_number" type="text" placeholder="Phone number 00.. ..." required="true">
        
        <input name="company_name" type="text" placeholder="Company Name">
        
        <input name="zip_zipID" type="text" placeholder="Zip code">
        
        <input name="zip_Country_countryID" type="text" placeholder="Country">
        
        <input name="email" type="email" placeholder="Your email" required="true">
        <label for='formCountries[]'>Select the Service:</label><br>
        <select multiple="multiple" name="formCountries[]">
            <option value="US">United States</option>
            <option value="UK">United Kingdom</option>
            <option value="France">France</option>
            <option value="Mexico">Mexico</option>
            <option value="Russia">Russia</option>
            <option value="Japan">Japan</option>
        </select>
        
        <input name="email" type="email" placeholder="Your email" required="true">
        
      
        <br>
                
        <label>Message</label>
        <textarea name="message" placeholder="Message Here"></textarea>
                
        <input id="submit" name="submit" type="submit" value="Insert">
            
        </form>
    </section>

    <footer class="body">
       <?php require 'footer.php';?>
       <br>
       <br>
        
    </footer>

