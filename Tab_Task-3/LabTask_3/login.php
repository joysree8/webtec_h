<!DOCTYPE html>
<html>
    <head>

    </head>
    <body><style> 
    .error {color: #FF0000;}</style>
    <?php
    $usernameErr = ""; $passwordErr = "";
    $username = ""; $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"]))
        {
            $usernameErr = "user name required";
        }

        else 
        {
            $username = $_POST["username"];

            if(!preg_match("/^[a-zA-Z-' ]*$ _/",$username)){
                $usernameErr = "Can contain a-z,A-Z,period,dash only";
            }

            else
            {
                $usernameErr = "";
            }
        }

        if(empty($_POST["password"]))
        {
            $passwordErr = "password required";
        }
        else
        {
            $password = $_POST ["password"];

            if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST["password"]))
            {
            $passwordErr = "Password must contain  special character and  must 8 characters password";
            }
            else
            {
                $passwordErr = "";
            }
        }
    }
    ?>
    
     <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class = "my form">
     
   <center>  <h3><font color="red">Login Form </h3> <br></font></center>
       <div class = "username">
         <label for="">Username: </label>
         <input type="text" name = "username">
         <span class = "error">
         <?php echo $usernameErr;?>
        </span>
         <br> <br>
       

    <div class = "password" >
           <label for="">Password:  </label>
           <input type="password" name = "password" >
           <span class = "error">
         <?php echo $passwordErr;?>
           </span>
        <br> <br>
         </div>

<hr class = "line">
    <div class = "remember">
        <input type="checkbox"> Remember Me
        <br> <br>
    </div>

    <input type="submit" class = "submit" value = "submit">
    <span> <a href="#">forgot password?</a> </span>

     </div>
</form>

<?php
    echo $username,$password;
?>


        
    </body>
</html>