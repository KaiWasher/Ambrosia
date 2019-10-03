<!DOCTYPE html>
<html>
     <?php
        include 'Header.php';
        $done=false;
        
        
        function checkCred($usr,$pswd){
            $filename = 'loginUs.txt';
            $usrCheck=false;
            $pswdCheck=false;
            if (file_exists($filename)){
                
                $lines = file("$filename");
                foreach ($lines as $line_num => $line) {
                    $split= preg_split("/[:]+/", $lines[$line_num]);
                    
                    if(trim($split[0])==$usr){
                        $usrCheck=true;
                    }else{
                         $usrCheck=false;
                        
                    } 
                    if(trim($split[1])==$pswd){
                        $pswdCheck=true;
                        
                    }else{
                       $pswdCheck=false;  
                    }
                     if($usrCheck && $pswdCheck){
                         break;
                     }
                }
                if($usrCheck && $pswdCheck){
                    $done=true;
                    $_SESSION['user']=$usr;
                    ?>
                        <script>document.location.href='buyerHome.php'</script>
                 
                    <?php
                }else{
                    echo"<h1>Login invalid</h1>","<br/>";
                }
                
        }else{
                echo "<h1>Login invalid</h1>","<br/>";
            }
            
    }
        ?>
<head>
	<title>Login - Buyer Account</title>
	<style>
		#border {border-style: solid; width:500px;height:190px; text-align: center; margin:0 auto; background-color: rgb(0, 0, 0, 0.5)}
		body {background-size: 100%}
		#loginTitle {font-size: 28px}
		p {color: white;}
		h2 {color:white;}
	</style>
</head>
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
        <form method="POST">
        <div id="border">
		<h2 id="loginTitle">Buyer Login</h2>
		<p>
			<label>e-mail: 
				<input type="text" name="usr" size="25">
			</label>
			<br/>
			<label>password:
				<input type="password" name="pswd" size="25">
			</label>
			<br/>
			<br/>
		<input type="submit" value="Log in" name="sub"/>
		<br/>
		<label>First time?</label>
                <a href = "register.php">Register</a>
                
	</div>
        </form>
        <?php 
         if(isset($_POST['sub'])){
                  $user=$_POST['usr'];
                  $password=$_POST['pswd'];
                  if(strlen($user)==0 || strlen($password)==0){
                      echo "Your password or/and username are invalid","<br/>";
                      
                  }else  if($_POST['sub']=="Log in") {
                               checkCred($user,$password);
                               
                  }
         }          
        
    ?>
</body>
<br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
 <?php
        include "footer.php";
        ?>
</html>