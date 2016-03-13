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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <?php 
        include  'db.php';
        ?>
    </head>
    <body>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Edit</th>
            </tr>
            
        
        <?php
//        echo '<pre>';
        $query = "select * from testing limit 20";
        $result = mysql_query($query) or die(mysql_error());
//        var_dump($result);
//        var_dump(mysql_fetch_assoc($result));
        while($row = mysql_fetch_assoc($result)){
            echo '<tr>';
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['company']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['phone']}</td>";
            echo "<td><a href=edit.php?id={$row['id']}>Edit</a></td>";
            echo '</tr>';
            
        }
        // put your code here
        ?>
            
            </table>
    </body>
</html>
