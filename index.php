<?php
session_start();
if(!isset($_SESSION['isLogin'])){
    header("Location:login.php?msg=Authentication Error");
    exit();
}
$username = $_SESSION['username'];

?>   

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
        echo 'Wlecome '.$username;
        
        ?>
        <a href="logout.php">Logout</a>
    </body>
</html>
