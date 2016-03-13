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
        <script>
        alert("hello world");
        
        </script>
    </head>
    
    <body>
        <?php
        // put your code here
        if(!isset($_POST['submit']))
        {
            header("location: login.php");
            exit();
        }
        
        $username=$_POST['username']; //$_post is used to welcome the details sent from login.php by post method
        $pass=$_POST['password'];
                $pass=  sha1($pass); //sha1 is used to encrypt the password string here
        include 'db.php';
        
        $query="select * from userdetails where email='$username' and password='$pass'"; //in double quotes, the values of the variables ($blabla) are printed whereas in single quotes, anything is printed as it is.
                $result=  mysql_query($query) or die(mysql_error()); //used to execute the above query and if query is unsuccessful, display the error
        
        if (mysql_num_rows($result)==1)
        {
            
            session_start();//takes permission from the pc to create memory
            $_SESSION['createLoginMemorySpace']=TRUE; //$_SSEESION creates a memory space in user pc to store frequently used variables like username, profile pic, etc. 
            //It's the cache or the cookies from websites.
            $_SESSION['username']=$username;
            echo 'Logged In Successfully. Welcome '.$username;
        }
        else
        {
            echo 'Login Failed';
        }
        ?>
        <br><br><br>
        <a href="logout.php">LOGOUT</a>
    </body>
</html>
