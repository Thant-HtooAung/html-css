<?php 
    include("header.html");
?> 
<!DOCTYPE html> 
<html> 
   <head> 
      <meta charset="utf-8"> 
      <meta name="viewpoint"content="width=device-width, initial-scale=1.0"> 
      <script src="https://kit.fontawesome.com/b4d5d586db.js" crossorigin="anonymous"></script>
      <style> 
        #A{
            width:500px; 
            border-radius:30px 30px 30px 30px; 
            position:relative; 
            left:36%;
        } 
        .register{
            border-radius:30px 30px 30px 30px; 
            position:relative; 
            left:35%;
        } 
        .label{
            position:relative; 
            left:32%;
        } 
        #B{
            width:500px; 
            border-radius:30px 30px 30px 30px; 
            position:relative; 
            left:36%; 
            color:aliceblue;
        }
      </style> 
   </head> 
   <body> 
        <form action="sign-up.php" method="post"> 
            <fieldset id="A"> 
                <label class="label"><i class="fa-regular fa-id-card"></i></label><input type="text" placeholder="Full name" name="name" class="register"><br> 
                <label class="label"><i class="fa-regular fa-envelope"></i></label><input type="email" placeholder="Email" name="email" class="register"><br> 
                <label class="label"><i class="fa-solid fa-lock"></i></label><input type="password" placeholder="Password" name="password" class="register"><br> 
                <label class="label"><i class="fa-solid fa-lock"></i></label><input type="password" placeholder="Repeat password" name="repeat_password" class="register"><br> 
                <button style="position:relative; left:45%; width:75px; height:50px; border-radius:30px 30px 30px 30px;" name="submit">Submit</button> 
            </fieldset><br><br>
        </form> 
        <fieldset id="B"> 
            <h5 style="text-align:center">Why register twitter?</h5><br><br> 
            <details> 
                <summary>Connect with friends:</summary> 
                <p>There are many reasons why you are disconnected with your friends.</p> 
                <ul>Different location, different timezone,</ul> 
                <ul>Haven't met in any event of life,</ul> 
                <ul>Long distance with little or no available contact.</ul> 
                <p>Twitter will provide a helping hand in finding friends!</p>
            </details> 
    </fieldset> 
   </body> 
</html> 

<?php 
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repeat_password = $_POST["repeat_password"];
        
        if(!empty($name) && !empty($email) && !empty($password) && !empty($repeat_password)) {
            if($password == $repeat_password){
                echo "Welcome MR/MRS $name.";
            } else {
                echo "Passwords do not match!";
            } 
        }
        else {  
            echo "Please fill up all fields!";
        }
    }
?>