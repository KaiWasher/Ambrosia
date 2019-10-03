<!DOCTYPE html>
<html>
<head>
	<title>Dairy Products</title>
	<style type="text/css">
	.text {
		text-align: center;
		font-weight: 900;
		color: black;
		font-size: 85

	}
	.checkbox{
		text-align: right;
		padding-left : 30px

	}
	.farm_name{
		 
		padding-right: 100px

	}
	.div{
		text-align: right;
		border-style: solid;
		background-color: rgb(255,248,220, 0.5);
		margin:0 auto;
		 
		height: 25px;
	}
	.titles{
		font-weight: 800;
		font-size: 55; 
		text-align: center; 
	}
	.checkout{
		margin: 0 auto;
		text-align: right; 
	}

body {background-size: 100%}
	</style>
</head>
<?php
    include "header.php";
    ?>
<?php include "navBarBuyer.php" ?>
<body background="https://images.pexels.com/photos/773253/pexels-photo-773253.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
	<h1 class="titles">Dairy Products</h1>
	<br/>

<div> <h3 class="farm_name">Ferme Laitiere Blondin</h3>
	<br/>
	
		<div class="div">
		<label class="checkbox"> <input type="checkbox" name="gala">milk 3.25%(7.00$)</label>
				<select>
					<option> 1L  </option>
					<option> 2L</option>
					<option> 3L</option>
					<option> 4L</option>
				</select>
	    <label class="checkbox"> <input type="checkbox" name="McIntosh"> Grey Owl Cheese (5.45$/kg)</label>
	      		<select>
					<option> 0.5kg  </option>
					<option> 1kg</option>
					<option> 2kg</option>
					<option> 3kg</option>
				</select>
	    <label class="checkbox"> <input type="checkbox" name="Honey">La Suavagine Cheese (4.67$/kg)</label>
	      		<select>
					<option> 0.5kg  </option>
					<option> 1kg</option>
					<option> 2kg</option>
					<option> 3kg</option>
				</select>
	    <label class="checkbox"> <input type="checkbox" name="Paula">Baluchon Cheese (4.33$/kg)</label>
	      		<select>
					<option> 0.5kg  </option>
					<option> 1kg</option>
					<option> 2kg</option>
					<option> 3kg</option>
				</select>	
		
		</div>									
		
		<a href="https://www.google.com/search?tbm=lcl&ei=q2JNXOC0ELGc5wKOvr_ADg&q=dairy+farms+in+quebec&oq=dairy+farms+in+quebec&gs_l=psy-ab.3..0j0i5i30k1l2j0i8i30k1l2.2104666.2106779.0.2153045.14.10.0.0.0.0.175.867.9j1.10.0....0...1c.1.64.psy-ab..7.7.614...0i7i30k1j0i8i7i30k1j0i7i5i30k1j0i13k1.0.h8Tni0v9Nf8#rlfi=hd:;si:13998692379807700863;mv:!1m2!1d45.9018477!2d-72.3459894!2m2!1d45.0742903!2d-74.5858604"><img src="Screenshot (14).png" width="200px" ></a>
		<br/>
		<br/>
		<div class="checkout"><input type = "submit" value = "Checkout" /></div>
	</div>
</body>
</html>