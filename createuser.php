<?php

if(!isset($_POST['submit']))
    {
    header("Location:index.php");
    exit();
}

$email = $_POST['email'];
$pass = $_POST['password'];

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("quiz") or die(mysql_error());
$query = "insert into ud(email,password) values($email','$pass')";
mysql_query($query) or die(mysql_error());
header("Location:Login.php?msg=Account Created Succesfully");
?>