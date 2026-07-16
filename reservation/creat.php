<?php 
include("../config/db.php");
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['reservation_date'];
    $time=$_POST['reservation_time'];
    $guests=$_POST['guests'];
    $message=$_POST['message'];
    // $status=$_POST['status'];
    // $Created_at=$_POST['created_at'];
    $q="insert into reservations ( name, email, phone, reservation_date, reservation_time, guests ,message) values('$name', '$email', '$phone', '$date', '$time', '$guests', '$message')";
    if($conn->query($q)){
        session_start();
        $_SESSION['success']='Request Submitted Successfully';
        header('location:../reservation.php');
    }
    
};
?>
