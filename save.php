<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo '<pre>';
//echo 'using post';
//var_dump($_POST);
//
//
//echo '<br><br><br><hr>using get';
//var_dump($_GET);

include 'db.php';
if(!isset($_POST['submit'])){
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];
$company = $_POST['company'];
$address = $_POST['address'];
$phone = $_POST['phone'];


$query = "update testing set name = '$name',email = '$email',company='$company',address='$address',phone=$phone where id = $id";
mysql_query($query) or die(mysql_error());

header("Location:display.php");