<link rel="stylesheet" href="assets/css/style-menu.css">
<?php
$curpage = basename ($_SERVER['PHP_SELF']);
?>
	<div  style="background-color: #000000;" >
    <div class="css_menu_two_line" style="pading-top: 2%;">
        <ul class="two_line_menu">
            <li <?php if($curpage == 'index.php') {echo 'class="active"'; } ?>><a href="index.php">Home</a>
               
            </li>
            
            <li <?php if($curpage == 'about.php') {echo 'class="active"'; } ?>><a href="about.php" >About<span class="drop-down"></a>
            	<ul>
                    <li><a href="about.php">The Company</a></li>
                    <li><a href="about.php">Our History</a></li>
                    <li><a href="about.php">Archive</a></li>
           		</ul>
            </li>
            
            <li <?php if($curpage == 'services.php') {echo 'class="active"'; } ?>><a href="services.php">Services</a>
         		 <ul>
                    <li><a href="services.php">Road Show</a></li>
                    <li><a href="services.php">Transfer Services</a></li>
                    <li><a href="services.php">Pendler Services</a></li>
                    <li><a href="services.php">Crew Transportation</a></li>
                    <li><a href="services.php">Worldwide Limousine Services</a></li>
                    <li><a href="services.php">Guardian Angels</a></li>
                    <li><a href="services.php">Security &amp; Bodyguards</a></li>
                    <li><a href="services.php">Use Your Transport Time</a></li>
                    <li><a href="services.php">Sightseeing</a></li>
            	</ul>
            
           </li>
            
            <li <?php if($curpage == 'cars.php') {echo 'class="active"'; } ?>><a href="cars.php">Cars</a>
            	 <ul>
                    <li><a href="#">Mercedes Benz E-class</a></li>
                    <li><a href="#">Mercedes Benz S-class</a></li>
                    <li><a href="#">VW Multivan</a></li>
                    <li><a href="#">Mercedes Benz Viano</a></li>
                    <li><a href="#">Mercedes Sprinter Minibus</a></li>
            	</ul>
            </li>
            
            <li <?php if($curpage == 'login.php') {echo 'class="active"'; } ?>><a href="login.php">Booking</a></li>
            
            <li <?php if($curpage == 'news.php') {echo 'class="active"'; } ?>><a href="news.php">News</a>
            <ul>
                <li><a href="#">Articles</a></li>
                <li><a href="#">Our App</a></li>
            </ul>
            </li> 
            <li <?php if($curpage == 'contact.php') {echo 'class="active"'; } ?>><a href="contact.php">Contact</a></li>
            
        </ul>
    </div>
   </div>
  
 