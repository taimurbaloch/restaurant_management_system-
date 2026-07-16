<?php
include('../config/db.php');
$id=$_GET['id'];
$q="delete from reservations where id='$id'";
$result=$conn->query($q);
header("location:list.php");
?>
