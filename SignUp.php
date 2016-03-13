<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="text-align:center"> 
            <form method="post" action="CreateUser.php">
                <input type="text" placeholder="Name" name="name" required=""/><br><br>
                <input type="email" placeholder="Email" name="email" required=""/><br><br>
                <input type="password" placeholder="Password" name="password" required=""/><br><br>
                <input type="password" placeholder="Confirm Password" name="cpassword" required=""/><br><br>
                <input type="text" placeholder="Contact Number" name="cno" required=""/><br><br>
                <input type="submit" value="Sign Up" name="submit"/>
            </form>
            <?php 
                if(isset($_GET['msg']))
                    echo $_GET['msg'];
            
            ?>
        </div>
    </body>
</html>
