
<style>* {box-sizing: border-box; }
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
	}</style>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="Fruits.php">Fruits</a>
  <a href="vegetables.php">Vegetables</a>
  <a href="Dairy.php">Dairy Products</a>
  <a href="Maple.php">Maple Syrup</a>
</div>