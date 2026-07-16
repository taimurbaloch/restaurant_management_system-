<?php

$host="localhost";

$user="root";

$password="";

$database="restaurant_management";

$conn=new mysqli($host,$user,$password,$database);

if(!$conn)
{
    die("Database Connection Failed : ".mysqli_connect_error());
}

?>
