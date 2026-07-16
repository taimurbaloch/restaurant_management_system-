<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Table Reservation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    body {
        background: #f8f9fa;
    }

    /* Hero */

    .form-box {

        background: white;

        padding: 35px;

        border-radius: 15px;

        box-shadow: 0 8px 20px rgba(0, 0, 0, .15);

    }

    .info-box {

        background: #ffc107;

        color: black;

        padding: 35px;

        border-radius: 15px;

        height: 100%;

    }

    .info-box h4 {

        margin-bottom: 20px;

    }

    .info-box p {

        margin-bottom: 18px;

    }

    .btn-book {

        background: #ffc107;

        color: black;

        font-weight: bold;

    }

    .btn-book:hover {

        background: #e0a800;

        color: white;

    }

    iframe {

        border-radius: 15px;

    }
    </style>

</head>

<body>

    <!-- Navbar -->

    <?php include 'includes/navbar.php'; ?>

    <!-- Resrvation HERO -->

    <section class="about-hero">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8 text-center">

                    <span class="hero-subtitle text-warning" data-aos="fade-right">
                        Welcome To Foodie's
                    </span>

                    <h1 data-aos="fade-up" class="text-warning">

                        Book Your

                        Table Now

                    </h1>

                    <p data-aos="fade-up" data-aos-delay="200">

                        <b> Enjoy fresh food prepared by professional chefs with
                            premium ingredients and unforgettable taste.</b>

                    </p>

                </div>

            </div>

    </section>


    <!-- Reservation -->

    <section class="py-5">

        <div class="container">

            <div class="row g-4">

                <!-- Form -->

                <div class="col-lg-7">

                    <div class="form-box">
                        <h3 class="mb-4 form-heading">

                            BOOK TABLE

                        </h3>

                        <form action="reservation/creat.php" method="POST">

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label>Name</label>

                                    <input type="text" name="name" class="form-control" placeholder="Enter Name"
                                        required>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label>Email</label>

                                    <input type="email" name="email" class="form-control" placeholder="Enter Email"
                                        required>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label>Phone</label>

                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label>Date</label>

                                    <input type="date" name="reservation_date" class="form-control">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label>Time</label>

                                    <input type="time" name="reservation_time" class="form-control">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label>Guests</label>

                                    <select name="guests" class="form-select">

                                        <option>1 Person</option>

                                        <option>2 Persons</option>

                                        <option>3 Persons</option>

                                        <option>4 Persons</option>

                                        <option>5 Persons</option>

                                        <option>More than 5</option>

                                    </select>

                                </div>

                                <div class="col-12 mb-3">

                                    <label>Special Request</label>

                                    <textarea name="message" class="form-control" rows="5"></textarea>

                                </div>

                                <div class="col-12">

                                    <button type="submit" class="btn btn-book w-100 py-3">

                                        Reserve Now

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <!-- Information -->

                <div class="col-lg-5">

                    <div class="info-box">

                        <h4>

                            <i class="fa-solid fa-clock"></i>

                            Opening Hours

                        </h4>

                        <p>

                            Monday - Friday<br>

                            09:00 AM - 11:00 PM

                        </p>

                        <p>

                            Saturday - Sunday<br>

                            10:00 AM - 12:00 AM

                        </p>

                        <hr>

                        <h4>

                            <i class="fa-solid fa-location-dot"></i>

                            Location

                        </h4>

                        <p>

                            Dera Ismail Khan, Pakistan

                        </p>

                        <hr>

                        <h4>

                            <i class="fa-solid fa-phone"></i>

                            Phone

                        </h4>

                        <p>

                            +92 300 1234567

                        </p>

                        <hr>

                        <h4>

                            <i class="fa-solid fa-envelope"></i>

                            Email

                        </h4>

                        <p>

                            info@foodies.com

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Map -->

    <section class="pb-5">

        <div class="container">

            <h2 class="text-center mb-4">

                Find Us On Map

            </h2>

            <iframe src="https://www.google.com/maps?q=dera%20ismail%20khan&output=embed" width="100%" height="250"
                style="border:0;"></iframe>

        </div>

    </section>

    <!-- Footer -->

    <footer class="bg-dark text-white text-center py-4">

        <div class="container">

            <p class="mb-0">

                © 2026 Royal Restaurant | All Rights Reserved

            </p>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Page ka HTML -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
       if(isset($_SESSION['success'])):
    ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '<?php echo $_SESSION["success"]; ?>'
    });
    </script>
    <?php
     unset($_SESSION['success']);
    endif;
     ?>


</body>

</html>