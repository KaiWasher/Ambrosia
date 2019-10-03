<!DOCTYPE html>
<html>
<head>
	<title>About Your Farm</title>
	<style>
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

	.middle {margin:0 auto; text-align: center}

	body {background-color:  #ffecb3}
	</style>
</head>
<body>
    <?php include "header.php" ?>
<div class="topnav">
  <a class="active" href="#description">Description</a>
  <a href="#sell">Sell</a>

</div>
    <br/>
    <br/>
     <?php include "farmLogo.php" ?>
<br/>
<br/>



<div class="middle">
	<form>
		<label>
			<h4>Briefly describe your farm. Make yourself standout:</h4>
			<textarea name="description" rows="4" cols="45">
			</textarea>
		</label>
		<label>
			<h4>Slogan:</h4>
			<input type="text" name="slogan" size="45">
		</label>
		<br/>
		<br/>
		<input type="submit" value="Update">
	</form>
</div>
<?php include "footer.php" ?>
</body>
</html>