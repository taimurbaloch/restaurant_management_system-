<?php

session_start();

include("../config/db.php");
$email = $_POST['email'];
$password =$_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
 
$result = $conn->query($sql);

$row =$result->fetch_assoc();
if(isset($row) && $row['name']!="")
{
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['role'] = $row['role'];

    // Admin Login
    if($row['role'] == "admin")
    {

        $_SESSION['success'] = "Welcome, " . $row['name'] . "!";

        header("Location: ../dashboard.php");
    }
    else
    {
        // Customer Login
        header("Location: ../reservation.php");
    }

}
else{
    $_SESSION['error']='Invalid email or password';
    header('location:../login.php');
}


?>
