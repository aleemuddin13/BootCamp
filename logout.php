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
        <?php
        // put your code here
        session_start(); //requests access to the cache memory for destroying
        session_destroy(); // destroys the cookies/memory. This prevents from automatically loggin in back again while you reopen the browser.
        //If not declared, this would remember your details and automatically login you. It's like "Remember me" while loggin in websites.
        header("Location: Login.php"); //redirects to login page
        ?>
    </body>
</html>
