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
        <script>
        var result = confirm("Press Ok To Continue"); // in javascript, variables are declared using 'var_varname'
        if(result) //if result is true, that means it will take an action if the ok button is pressed.
        {
            window.open('login.php','_self'); //self opens the link in the same tab itself. If not given, it will open it in new tab.
        }
        else
        {
            window.open('signup.php','self');
        }
        </script>
    </body>
</html>
