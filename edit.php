<?php include 'db.php';?>


<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
if(!isset($_GET['id'])){
    exit();
}
$query = "select * from testing where id = {$_GET['id']}";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
?>
<form class="form" style="text-align: center;margin-top: 30px;padding:10px"action="save.php" method="POST">
    Name : <input type="text" value=<?php echo $row['name']; ?> name="name"/><br>
    Email : <input type="email" value=<?=$row['email'];?>  name="email"/><br>
    <input type="hidden" name="id" value="<?=$row['id']?>"/>
    Company : <input type="text" value=<?=$row['company'];?> name="company"/><br>
    Address : <input type="text" value='<?=$row['address'];?>' name="address"/><br>
    Phone : <input type="text" value='<?=$row['phone'];?>' name="phone"/><br>
    <input type="submit" value="save" name="submit"/>
    
</form>