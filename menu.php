<link rel="stylesheet" href="assets/css/menu.css">
<?php
$curpage = basename ($_SERVER['PHP_SELF']);
?>

    <div id='main-nav'>
        <ul>
            <li <?php if($curpage == 'index.php') {echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
            <li <?php if($curpage == 'gallery.php') {echo 'class="active"'; } ?>><a href="gallery.php">Gallery</a></li>
            <li <?php if($curpage == 'about.php') {echo 'class="active"'; } ?>><a href="about.php" >About<span class="drop-down"></a>
                <ul>
                  <li><a href="#">Island Info</a></li>
                  <li><a href="#">Native Culture</a></li>
                  <li><a href="#">Wildlife</a></li>
                </ul>
            </li>
            <li <?php if($curpage == 'login.php') {echo 'class="active"'; } ?>><a href="login.php" >Login</a></li>
            <li <?php if($curpage == 'register.php') {echo 'class="active"'; } ?>><a href="register.php" >Register</a></li>
        </ul>
    </div>
  
  
 