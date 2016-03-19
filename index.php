<?php
session_start();
if(!isset($_SESSION['username'])){
    
    header("Location:Login1.php?msg=Authentication Error");
    exit();
}

$username=$_SESSION['username'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
        
        <div style="text-align: center">
        <?php
         echo "<h1/> Welcome  ".$username;
        ?>
        </div>
        <div>
            
            <form style="text-align: center" method="POST" action="index.php" >
                
                
                
                
                <input placeholder="Enter Total Classes" style="text-align: center" type="number" required="" name="TotalClasses"><br><br>
                
                
                <input placeholder="Classes You Attended" style="text-align: center" type="number" required="" name="Attended"><br><br>
               
                
                <input style="text-align: center"type="number" placeholder="Bonus" name="Bonus"><br><br>
                
                <input type="submit"  name="submit"><br><br>
                
             
            </form>
        </div>
                <?php
                include 'db1.php';
                if(isset($_POST['submit'])){
                  
                $attended = $_POST['Attended'];
                $tot      =$_POST['TotalClasses'];
                $absent   =$tot-$attended;
                $percentage = ($attended/$tot)*100;
                
                $query = "insert into attendance(Attended , TotalClasses , Absent , Percentage) values('$attended','$tot',$absent , $percentage)";
                mysql_query($query) or die(mysql_error());
                }
                ?>
        
        <?php
        
        $query = "select Attended , TotalClasses from attendance";
        $result=  mysql_query($query) or die (mysql_error());
        $ta=$tc=0;
        while ($row=  mysql_fetch_assoc($result)){
            
            $ta = $ta+$row['Attended'];
            $tc = $tc+$row['TotalClasses'];
        }
        
        ?>
        <table class="table table-bordered">
            
            <tr>
                
                <th>Cumulative Attendance</th>
                <th>Cumulative Classes</th>
            </tr>
            
            <?php
            
                echo '<tr>';
                echo "<td>{$ta}</td>";
                echo "<td>{$tc}</td>";
          ?>
               
        
        
        <table class="table table-bordered">
            
             <tr>
                 <th>S.NO</th>
                <th>Attended</th>
                <th>Total Classes</th>
                <th>Absent</th>
                <th>Percentage</th>
                
                
            </tr>
            <?php

        $query = "select * from attendance order by id desc";
        $result = mysql_query($query) or die(mysql_error());
        
        while($row = mysql_fetch_assoc($result)){
            echo '<tr>';
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['Attended']}</td>";
            echo "<td>{$row['TotalClasses']}</td>";
            echo "<td>{$row['Absent']}</td>";
            echo "<td>{$row['Percentage']}</td>";
           
            
        }
        
        ?>
            
            
        </table>
        
       
        
        
        
        
            <div style="text-align: center">
            <a  href="logout1.php"><button>Logout</button></a>
            </div>
    </body>
</html>
