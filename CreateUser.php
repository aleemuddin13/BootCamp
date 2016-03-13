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
        
    if(!isset($_POST['submit'])) //checks the submit button for its existence irrespective of whether it sends data or not
            {
    header("Location:Signup.php"); //transfers to signup.php if submit button dont exist
    exit(); // and exits the page
}
$name = $_POST['name']; //So, post in the signup page binds all the variables in an array $_POST which is a global variable. 
//So, to access any value of this array, this is the syntax. Also, instead of 'name', we can write $_POST[0] to access the first variable.
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
        
        ?>
    </body>
</html>
