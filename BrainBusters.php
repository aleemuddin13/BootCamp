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
     <style>

{ margin: 0; padding: 0; }

html { 
        background: url('bb.png') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
       #p1 {
    font-size:2em;
    background-color: #d5d9d8 ;
    display:inline-block;
    }
    #p2{
        font-size:3em;
    }
    #ans{
        font-size:3em;
    }
</style>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    <script type="text/javascript" src="ans.js"></script>
    <body>
        <?php
           include 'rand.php';
        ?>
        <div style=" text-align: center">
            <p id="p1">Shift the given string by <?php echo "$j";?></p><br><br>
            <p id="p2"><b><?php echo "$ans";?></b><br><br>
            <div id="ans"  style="display:none;" > 
                <?php echo "$que";?>
                <input type="button" name="answer" value="Next" onclick="refresh()" />
            </div>
            <input type="button" name="answer" value="Answer" onclick="showDiv()" />
        </div>
    </body>
</html>
