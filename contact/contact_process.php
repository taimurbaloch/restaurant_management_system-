<?php 
include("../config/db.php");
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    // $status=$_POST['status'];
 $q="insert into contact_messages ( name, email ,message) values('$name', '$email','$message')";
    if($conn->query($q)){
        session_start();
        $_SESSION['success']='Message Sent Successfully';
        header('location:../contact.php');
    }
    
};
?>
