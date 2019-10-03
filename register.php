<!DOCTYPE html>
<html>
    <?php
    include "Header.php";
    ?>
<head>
	<title>Login - Buyer Account</title>
	<style>
		#border {border-style: solid; width:700px;height:500px; text-align: left; margin:0 auto; background-color: rgb(0, 0, 0, 0.7)}
		body {background-size: 100%}
		#loginTitle {font-size: 28px}
		label {color: white;}
		h1 {color:white; text-align: center}
		.tab {margin-left: 2.5em}
	</style>
        
</head>
 <?php 
        $done=false;
        function createCred($usr,$pswd){
            $myfile = fopen("loginUs.txt", "a+") or die("Unable to open file!");
            fwrite($myfile, $usr);
            fwrite($myfile, ":");
            fwrite($myfile, $pswd);
            fwrite($myfile, "\r\n");
            fclose($myfile);
            echo "<h1>Account created </h1>","<br/>";
        }
            ?>
            
<body background="https://images.unsplash.com/photo-1542223189-67a03fa0f0bd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2704&q=80">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<form id="border" method="POST">
	<h1>Create an account</h1>
	<p>
		<br/>
		<br/>
		<label class="tab">First name:
			<input type="text" name="first name" size="22">
		</label>
		<label class="tab">Last name:
			<input type="text" name="last name" size="22">
		</label>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<label class="tab">Username:
			<input type="text" name="usr" size="26">
		</label>
		<label class="tab">Password:
			<input type="password" name="pswd" size="22">
		</label>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<label class="tab">Address:
			<input type="text" name="address" size="25">
		</label>
		<label class="tab">City:
			<input type="text" name="city" size="27">
		</label>
		<br/>
		<br/>
		<br/>
		<label class="tab">Postal Code:
			<input type="text" name="postal code" size="21">
		</label>
		<label class="tab">Phone number:
			<input type="text" name="phone number" size="17">
		</label>
		<br/>
		<br/>
		<br/>
                <input id="LOL" class="tab" type="checkbox" name="policy agreement" value="agreed"/>
		<label>I agree to the Terms of Service.</label>
		<br/>
		<br/>
		<br/>
		<input onclick ="termsOfServices()"  class="tab" type="submit" value="Submit" name="sub"/>
	</p>
</form>
<?php
if(isset($_POST['sub'])){
                  $user=$_POST['usr'];
                  $password=$_POST['pswd'];
                  if(strlen($user)==0 || strlen($password)==0){
                      echo "<h2>Your password or/and username are invalid</h2>","<br/>";
                      
                  }else  if($_POST['sub']=="Submit") {
                               createCred($user,$password);
                               
                  }
        }      
        
    ?>
    <script>
            function termsOfServices(){
                if (document.getElementById("LOL").checked){
                   window.open ("buyerHome.php"); 
                } else {
                   
                    alert("You have to check the terms and conditions");
                }
            }
        </script>
	
</body>
<br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
<?php include "footer.php"?>
</html>