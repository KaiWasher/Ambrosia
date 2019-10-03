<!DOCTYPE html>
<html>
<head>
    <?php
    include "header.php";
    ?>
    <?php include "navBarBuyer.php" ?>
	<title>Maple Products</title>
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
		background-color: rgb(255,215,0, 0.5);
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
        <script>
        function open(){
            location.href = 'checkout.php';
            
        }
        
        </script>

</head>
<body background="https://images.pexels.com/photos/33260/honey-sweet-syrup-organic.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
	<h1 class="titles">Maple products</h1>
	<br/>

<div> <h3 class="farm_name">Sucrerie de la Montagne</h3>
	<br/>
		<div class="div">
		<label class="checkbox"> <input type="checkbox" name="gala">maple caramels</label>
				<select>
					<option> 5x </option>
					<option> 10x</option>
					<option> 20x</option>
					<option> 30x</option>
				</select>
	    <label class="checkbox"> <input type="checkbox" name="McIntosh">maple syrup</label>
	      		<select>
					<option> 0.25L</option>
					<option> 0.50L</option>
					<option> 0.75L</option>
					<option> 1.00L</option>
				</select>
	    <label class="checkbox"> <input type="checkbox" name="Honey">maple candies</label>
	      		<select>
					<option> 5x</option>
					<option> 10x</option>
					<option> 20x</option>
					<option> 30x</option>
				</select>
	    <label class="checkbox"> <input type="checkbox" name="Paula">maple butter (5.00$)</label>
	      		<select>
					<option> 1x </option>
					<option> 2x</option>
					<option> 3x</option>
					<option> 4x</option>
				</select>	
		
		</div>									
		
		<a href="https://www.google.com/search?tbm=lcl&ei=_G5NXMy8J6Wr5wK7oYvYBQ&q=cabane+a+sucre+quebec&oq=cabane+a+&gs_l=psy-ab.1.1.0i131k1j0i20i263k1l2j0l7.46593.49829.0.51649.36.18.0.1.1.0.108.1177.14j1.16.0....0...1c.1.64.psy-ab..25.11.852.6..33i22i29i30k1j35i39k1j0i67k1j0i131i67k1.121.O8wqZ7LtdzE#rlfi=hd:;si:15612509329012092857;mv:!1m2!1d45.789336!2d-73.0754908!2m2!1d45.2010209!2d-74.3753715"><img src="Screenshot (14).png" width="200px" ></a>
	</div>
<br/>
	<br/>
<div class="checkout"><input type = "submit" value = "Checkout" onClick="document.location.href='checkout.php'" /></div>
		
</body>
</html>