<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!isset($_POST['submit'])){
    header("Location:SignUp.php");
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$cno = $_POST['cno'];

if($pass != $cpass){
    header("Location:SignUp.php?msg=Password Doesn't match");
    exit();
}

if(!is_numeric($cno)){
    header("Location:SignUp.php?msg=Enter Correct Contact Number");
    exit();
}
$pass = sha1($pass);

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("BootCamp") or die(mysql_error());

$query = "insert into userdetails(name,email,password,phonenumber) values('$name','$email','$pass','$cno')";
mysql_query($query) or die(mysql_error());

header("Location:Login.php?msg=Account Created Succesfully");

