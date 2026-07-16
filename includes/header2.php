<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Royal Restaurant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/dashboard.css">

</head>

<body>

    <div class="wrapper">

        <!-- Sidebar -->

        <div class="sidebar">

            <div class="logo">

                <h2>🍽 Royal</h2>

            </div>

            <ul>

                <li class="active">
                    <a href="../dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a>
                </li>

                <li>
                    <a href="#"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-utensils"></i> Menu</a>
                </li>

                <li>
                    <a href="#"><i class="fa-solid fa-image"></i> Gallery</a>
                </li>

                <li>
                    <a href="../reservation/list.php"><i class="fa-solid fa-calendar-check"></i> Reservation</a>
                </li>

                <li>
                    <a href="../customer/list.php"><i class="fa-solid fa-users"></i> Customers</a>
                </li>

                <li>
                    <a href="../contact/list.php"><i class="fa-solid fa-envelope"></i> Messages</a>
                </li>

                <li>
                    <a href="#"><i class="fa-solid fa-gear"></i> Settings</a>
                </li>

                <li>
                    <a href="../process/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </li>

            </ul>

        </div>

        <!-- Main -->

        <div class="main">

            <!-- Top -->

            <div class="topbar">

                <h3>

                    Welcome Admin 👋

                </h3>

                <div>

                    <img src="../assets/images/admin.jpg" class="rounded-circle">

                </div>

            </div>

            <!-- Cards -->

            <div class="container-fluid mt-4">
