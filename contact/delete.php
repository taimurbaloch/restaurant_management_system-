<?php include('../config/db.php');?>
<?php 
$id=$_GET['id'];
$q="delete from contact_messages where id='$id'";
$result=$conn->query($q);
header("location:list.php");

?>
