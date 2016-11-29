<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <title>Copenhagen Limousine Service</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <meta name="description" content="Copenhagen Limousine Service web page">
    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="assets/css/slider-style.css">
        <link rel="stylesheet" href="assets/css/carousel-style.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
 </head>
    
    <body style="background-color: #000000;">
     <?php include 'menu.php';?>
    
    
          <article class="article">
          <img src="img/banner-video.jpg" alt="buble" style="width:100%;height:100%;">
          </article>
        </br>
        </br>
        
        <div class="container">
          <h1>Our Services</h1>
          <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
          </div>
          <!-- add  more items here -->
          <!-- Example item start:  -->
          
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
          </div>
          
          <!--  Example item end -->
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div><!--slider end-->
        
            
  		</br>
        </br>
        </br>
        </br>
        
		<div>
       <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p style="color:#676767;">“Probably the most professional limo service I have ever used<br>
               – truly classy cars”</p>
            </blockquote>
             <h5>Casper Hach, first-time client</h5>
          </figcaption>
        </figure>
        <figure class="snip1533">
          <figcaption>
            <blockquote>
              <p style="color:#676767;">“Kind and always helpful<br>
               chauffeurs, limo service <br>
               in a league of it’s own.”</p>
            </blockquote>
              <h5>Poul Bjørn, creative director</h5>
          </figcaption>
        </figure>
		</div><!--end testimonials-->
        
        </br>
        </br>
        </br>
      </div><!--containerends here--> 
      </br>
      </br>
	<?php require 'footer.php';?>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="assets/js/slider-index.js"></script>
  <script src="assets/js/carousel-index.js"></script>
	<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>