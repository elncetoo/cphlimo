<link rel="stylesheet" href="assets/css/style-menu.css">
<?php
$curpage = basename ($_SERVER['PHP_SELF']);
?>
<div id='cssmenu'>
<ul>
<li <?php if($curpage == 'index.php') {echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
<li <?php if($curpage == 'gallery.php') {echo 'class="active"'; } ?>><a href="gallery.php">Gallery</a></li>
<li <?php if($curpage == 'about.php') {echo 'class="active"'; } ?>><a href="about.php" >About</a></li>
<li <?php if($curpage == 'login.php') {echo 'class="active"'; } ?>><a href="login.php" >Login</a></li>
<li <?php if($curpage == 'register.php') {echo 'class="active"'; } ?>><a href="register.php" >Register</a></li>

</ul>
</div>