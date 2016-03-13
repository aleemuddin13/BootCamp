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
    <center> <form action="CreateUser.php" method="Post"> //get uses url transfer with a question mark
           // form action="Login.php" method="Get" //post uses backend transfer
           
           <br><br>
  Id:<br>
  <input type="text" name="id" placeholder="Insert Id" required="">
  <br><br>
  Name:<br>
  <input type="text" name="name" placeholder="Insert Name" required="">
  <br><br>
  Email:<br>
  <input type="email" name="email" placeholder="Your Email Here" required="">
  <br><br>
  Password:<br>
  <input type="password" name="password" placeholder="Insert A Password" required="">
  <br><br>
  Confirm Password:<br>
  <input type="password" name="cpassword" placeholder="Re-Enter Password" required="">
  <br><br>
  Phone Number:<br>
  <input type="int" name="cno" placeholder="10 Digit Number" required="">
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form> 

    
    </body>
</html>
