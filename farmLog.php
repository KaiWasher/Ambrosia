<!DOCTYPE html>
<html>
    <?php
    include "header.php";
    ?>
    <?php 
        $done=false;
        
        
        function checkCred($usr,$pswd){
            $filename = 'loginF.txt';
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
                        <script>document.location.href='farmHome.php'</script>
                 
                    <?php
                }else{
                    echo"Login invalid","<br/>";
                }
                
        }else{
                echo "Login invalid","<br/>";
            }
            
    }
        ?>
<head>
	<title>Login - Farmer Account</title>
	<style>
		#border {border-style: solid; width:500px;height:190px; text-align: center; margin:0 auto;}
		body {background-size: 100%}
		#loginTitle {font-size: 28px}
	</style>
</head>
<body background="https://images.unsplash.com/photo-1470685983317-0084951ce1ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2706&q=80">

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
		<h2 id="loginTitle">Farmer Login</h2>
		<p>
			<label>email: 
				<input type="text" name="usr" size="30" >
			</label>
			<br/>
			<br/>
			<label>password: 
				<input type="password" name="pswd" size="30" >
			</label>
		</p>
		<input type="submit" value="Log in" name="sub"/>
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