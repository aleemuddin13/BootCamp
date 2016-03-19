

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
        <div style="text-align: center">
            
            <br>
            <br>
            <br>
            <form method="post" action="createUser1.php">
                
                <input type="text" placeholder="Name" name="name" required=""><br><br>
                
                <input type="text" placeholder="Email" name="email" required=""><br><br>
                
                <input type="password" placeholder="Password" name="password" required=""><br><br>
                
                <input type="password" placeholder="Confirm Password" name="cpassword" required=""><br><br>
                
                <input type="number" placeholder="Phone Number" name="cno" required=""><br><br>
                
                <input type="submit" value="Sign Up" name="signUp">
  
</form>
        </div>
            <?php 
                 if(isset($_GET['msg']))
                  echo $_GET['msg'];
                 ?>
        
    </body>
</html>

