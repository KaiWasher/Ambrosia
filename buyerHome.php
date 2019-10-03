<!DOCTYPE html>
<html>
<head>
    <title>Ambrosia</title>
	<style type="text/css">
		* {box-sizing: border-box; }
		.slideshow-container {
			max-width: 1000px;
			position: relative;
			margin: auto;
		}
		.mySlides{
			display: block; 
		}
		.prev, .next{
			cursor: pointer;
  			position: absolute;
  			top: 50%;
  			width: auto;
  			margin-top: -22px;
 			padding: 16px;
  			color: white;
  			font-weight: bold;
  			font-size: 18px;
  			transition: 0.6s ease;
  			border-radius: 0 3px 3px 0;
  			user-select: none;
		}

		.next {
  			right: 0;
  			border-radius: 3px 0 0 3px;
  			text-shadow:grey;
		}
		.prev:hover, .next:hover {
  			background-color: rgb(0,0,0,0.8);
  		}

  		.text {
  			color: #f2f2f2;
  			font-size: 30px;
  			padding: 8px 12px;
  			position: absolute;
  			bottom: 8px;
  			width: 100%;
  			text-align: center;
		}

		.numbertext {
 			color: #f2f2f2;
  			font-size: 12px;
  			padding: 8px 12px;
  			position: absolute;
  			top: 0;
		}

		.dot {
  			cursor: pointer;
  			height: 15px;
  			width: 15px;
  			margin: 0 2px;
  			background-color: #bbb;
  			border-radius: 50%;
  			display: inline-block;
  			transition: background-color 0.6s ease;
		}

		.active, .dot:hover {
  			background-color: #717171;
		}

		.fade {
  			-webkit-animation-name: fade;
  			-webkit-animation-duration: 1.5s;
  			animation-name: fade;
  			animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
  			from {opacity: .4} 
  			to {opacity: 1}
		}

		@keyframes fade {
  			from {opacity: .4} 
  			to {opacity: 1}
		}
	.topnav {
	background-color: grey;
	overflow: hidden;
	width: 100%;
	}

	.topnav a {
		float: left;
		color: white;
		text-align: center;
		padding: 14px 60px;
		text-decoration: none;
		font-size: 17px;
	}

	.topnav a:hover {
		background-color: white;
		color: grey;
	}

	.topnav a.active {
		background-color: darkgreen;
		color: white;
	}

	body {background-image:none; background-color:   #ffecb3;}

	h1.title {font-family: "Courier New";}
	p.title {font-family: "Courier New"; font-style: italic; margin-left: 160px; margin-right: 160px;}

	</style>
</head>

<body>

<?php include "header.php" ?>
    <?php include "navBarBuyer.php" ?>

<br/>
<br/>
<br/>
<br/>


<div style="text-align: center;">
	<h1 class="title">A WEB-BASED FOOD MARKET</h1>
	<p class="title">
		<br/>
		Our mission is to empower local farmers and help them get their products the recognition they deserve. This tool
    allows them to advertise their foods on the web, and have them directly delivered to the consumers. That means more
    money goes into the pockets of local farmers, and customers are treated to fresh produce brought right to their door.
    <br/>
    <br/>
    Additionally, cutting out the need for supermarkets means far less gas is used in the transportation of these products, 
    resulting in a far lighter carbon footprint.
    <br/>
    <br/>
    With our continued focus on creating a more and more efficient system, we hope to inspire more people to support local 
    farms throughout the years to come...
	</p>
</div>
<br/>
<br/>

	<script type="text/javascript">
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="https://images.pexels.com/photos/51947/tuscany-grape-field-nature-51947.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
    <div class="text">FROM LOCAL FARMS</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="https://images.pexels.com/photos/2832/vehicle-vintage-old-truck.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
    <div class="text">THROUGH A RELIABLE DELIVERY SYSTEM</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="https://images.pexels.com/photos/8313/food-eating-potatoes-beer-8313.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
    <div class="text">RIGHT TO YOUR KITCHEN TABLE</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<?php include "footer.php"?>
</body>
</html>