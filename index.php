<?php 
    include("header.html");
?>
<!DOCTYPE html> 
<html> 
   <head> 
      <meta charset="utf-8"> 
      <meta name="viewpoint"content="width=device-width, initial-scale=1.0"> 
      <style> 
           .button{
            position:relative; 
            left:20%;
            border-radius:30px 30px 30px 30px;
            width:300px; 
            height:75px;
           }  
           fieldset{
            width:500px; 
            border-radius:30px 30px 30px 30px; 
            position:relative; 
            left:36%;
           }
      </style> 
    </head> 
    <body>
        <form action="index.php" method="post"> 
            <fieldset> 
                <h5 style="text-align:center;">Please select the following methods:</h5> 
                <a href="google.com"><button class="button">Google</button></a><br> 
                <a href="facebook.com"><button class="button">Facebook</button></a><br> 
                <a href="linkedin.com"><button class="button">Linkedin</button></a><br><br><br>  
                <h5 style="text-align:center; color:white;">--or--</h5><br> 
                <a href="sign-up.php"><p style="text-align:center;">Sign up here.</p></a>
    </body>
</html>



