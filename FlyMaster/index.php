<?php
    include_once 'import/header.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php
    include_once 'import/heading.php';
?>

<div class="slideshow-container" style="max-width:600px; height:auto; margin-left:auto; margin-right:auto;" >

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/aa.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/ama.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/qa.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/sa.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/ta.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/ua.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/ac.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/au.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/airlines/sg.png" style="width:100%">
  <div class="text"></div>
</div>

</div>

<div class="para">
    <h1 class="maint" style="margin-bottom: 30px; margin-top: 60px;">What is Fly Master</h1>
    <p class="fly-para">Welcome to Fly Master, your gateway to hassle-free air travel! Fly Master is not just a booking platform; it's your trusted travel companion dedicated to making your air travel experience seamless, efficient, and enjoyable. At Fly Master, we understand the importance of travel in today's fast-paced world. Whether you're jetting off for a well-deserved vacation or attending crucial business meetings across the globe, our Air Ticket Reservation System is designed to meet all your travel needs.</p>

    <h1 class="maint" style="margin-bottom: 30px; margin-top: 60px;">Why Choose Fly Master?</h1>
    <div class="features">
    <div class="feature">
        <i class="fa fa-check"></i>
        <h4>Easy Booking</h4>
        <p>Simple and quick flight reservations at your fingertips.</p>
    </div>
    <div class="feature">
        <i class="fa fa-globe"></i>
        <h4>Endless Choices</h4>
        <p>Explore a world of airlines, destinations, and options.</p>
    </div>
    <div class="feature">
        <i class="fa fa-user"></i>
        <h4>Personalized Experience</h4>
        <p>Tailored services and preferences for a unique journey.</p>
    </div>
    <div class="feature">
        <i class="fa fa-headphones"></i>
        <h4>Exceptional Support</h4>
        <p>24/7 dedicated customer support for your peace of mind.</p>
    </div>
    <div class="feature">
        <i class="fa fa-lock"></i>
        <h4>Secure and Reliable</h4>
        <p>Your data and payments handled with the highest security standards.</p>
    </div>
</div>

</div>


    <!-- this section is hidden. only applied when user clicked sign up or login button -->
    <?php
    include_once 'login.php';
    ?>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</body>
</html> 


<?php
    include_once 'import/footer.php';
?>