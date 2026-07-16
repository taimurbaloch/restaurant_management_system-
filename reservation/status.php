<?php
include("../config/db.php");
$id=$_GET['id'];
$q="select status from reservations where id='$id'";
$result=$conn->query($q);
 $row=$result->fetch_assoc();
 

 if($row['status']=='Pending'){
    $newstatus='confirmed';

   } elseif ($row['status']=='Confirmed'){
        $newstatus='Cancelled';
    }else{
        $newstatus='Pending';
        };
        
            $update="update reservations set status='$newstatus' where id='$id'";
            $conn->query($update);

            if($conn->query($update)){
               header('location:list.php');
               exit();
            }else{
                echo $conn->error;
            }
?>
