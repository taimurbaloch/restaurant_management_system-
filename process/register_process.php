<?php

include("../config/db.php");

$name=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$password=$_POST['password'];

 session_start();
$check = $conn->query("SELECT * FROM users WHERE email='$email'");
$data = $check->fetch_assoc();

if(($data['email'] == $email))
{

$_SESSION['error']='Email are already exist';
    header('location:../register.php');
    exit();
};


$sql="INSERT INTO users(name,email,phone,password,role)
VALUES('$name','$email','$phone','$password','customer')";
if($conn->query($sql))
{

    $_SESSION['success']='Account Registrated successfully';
    // header('location:../login.php');
    header('location:../register.php');
    exit();
};
?>
