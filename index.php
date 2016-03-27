<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><head><h1 align='center'><b>IQ TEST</b></h1></head></html>
<html>
    <head>
        <img src="iqtest-en.gif" height="500" width="500">
        <meta charset="UTF-8">
        <title>IQ TEST</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/js" href="style.sass"/>
    </head>
    <body>
        <div style="text-align:center"> 
            <form method="post" action="Createuser.php">
                
                <input type="email" placeholder="Email              " name="email" required=""/><br><br>
                <input type="password" placeholder="Password           " name="password" required=""/><br><br>
                <input type="submit" value="Start IQ test" name="submit"/>
            </form>
            <?php 
                if(isset($_GET['msg']))
                    echo $_GET['msg'];
            
            ?>
        </div>
    </body>
</html>