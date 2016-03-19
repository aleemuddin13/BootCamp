<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!isset($_POST['login'])){
    header("Location:login1.php");
    exit();
}

$username = $_POST['username'];
$pass = $_POST['password'];

$pass = sha1($pass);

include 'db1.php';

$query = "select * from userdetails where name = '$username' and password='$pass'";
$result= mysql_query($query) or die(mysql_error());;

if(mysql_num_rows($result)==1){
    session_start();
    $_SESSION['isLogin'] = TRUE;
    $_SESSION['username'] = $username;
    header("Location:index.php");
}
else{
    echo 'Login Unsuccessful';
}


