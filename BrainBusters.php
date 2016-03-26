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
        background-color: #d5d9d8 ;
        display:inline-block;
    }
</style>
     <?php
           include 'rand.php';
        ?>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    <script type="text/javascript" src="ans.js"></script>
    <script type="text/javascript">
       var myvari = <?php echo json_encode($quel); ?>;
      
</script>


    <body>
        
        <div style=" text-align: center">
            
            <p id="p1">Shift the given string by <?php echo "$j";?></p><br><br>
            <p id="p2"><b><?php echo "$ans";?></b><br><br>
            <div id="ans"  style="display:none;" > 
                <?php echo "$que";?><br>
               
                <input type="button" name="next" value="Next" onclick="refresh()" />
            </div>
            <div  style="display:none;" >
                <p id="bla" ><?php echo "$quel";?></p>
            </div>
            
            <div id="check"  style="display:none;" > 
               
                <img src="tick.png" alt="Correct" style="width:38px;height:38px;">
                
            </div>
            <div id="check1"  style="display:none;" > 
               
                <img src="cross.png" alt="Wrong" style="width:38px;height:38px;">
                
                            </div>
           
            <div id="obs" style="display:block" >
                <input type="text" placeholder="Answer" name="answer" id="pro" style="width:300px;height:60px;text-align:center;font-size:30px;" /><br>
            <button onclick="comp()" >Submit</button>
            </div>
            <div id="anb" style="display:block" >
            <button onclick="showDiv();this.style.visibility= 'hidden';" >Answer!</button>
            </div>
           
        </div>
    </body>
</html>
