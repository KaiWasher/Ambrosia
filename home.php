<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <?php
    include "header.php";
    ?>
    <head>
        <title>Ambrosia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            button.lol{
                width: 300px;
                height: 40px;

            }
            button.lol2{
                width: 300px;
                height: 40px;
            }
            div.wrapper{
                text-align: center;
            }
            body{
                background-image: url("https://images.pexels.com/photos/733174/pexels-photo-733174.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }


        </style>

    </head>
    <body>  
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

      
        <div class ="wrapper" style=" bottom:50%; left:38%">
            <button class = "lol" onclick = "location.href = 'loginUs.php';">Buyer</button>
            <br/>
            <br/>
            <button class = "lol2" onclick = "location.href = 'farmLog.php';">Farmer</button>
        </div>
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
       
        <?php
        include "footer.php";
        ?>
    </body>
</html>

