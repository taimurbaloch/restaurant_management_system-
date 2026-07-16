<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us | Royal Restaurant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

    <?php include("includes/navbar.php"); ?>

    <!-- ABOUT HERO -->

    <section class="about-hero">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8 text-center">

                    <h1>About Our Restaurant</h1>

                    <p>
                        Experience the perfect combination of delicious food,
                        luxurious atmosphere and outstanding hospitality.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- ABOUT STORY -->

    <section class="about-story py-5">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <img src="assets/images/admin.jpg" class="img-fluid rounded shadow">

                </div>

                <div class="col-lg-6">

                    <h5 class="text-warning mb-3">
                        ABOUT US
                    </h5>

                    <h2 class="fw-bold mb-4">
                        Welcome To Royal Restaurant
                    </h2>

                    <p>
                        Royal Restaurant has been serving customers with passion,
                        quality and unforgettable taste for more than 15 years.
                        Every dish is prepared using fresh ingredients by our
                        professional chefs.
                    </p>

                    <p>
                        Our goal is not only to serve food but to provide a
                        luxurious dining experience where families and friends
                        can enjoy memorable moments together.
                    </p>

                    <a href="menu.php" class="btn btn-warning px-4 py-3 mt-3">

                        Explore Menu

                    </a>

                </div>

            </div>

        </div>

    </section>
    <!-- TEAM -->
    <section class="py-5 mt-5 "  style="background-image: url('assets/images/hall2.jpg');background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 550px;
">

        <div class="container text-center">

            <h1 class="section-title text-white fw-bold">Meet Our Team</h1>

            <p class="text-white fw-bold">Choose your favorite food</p>

            <div class="row g-4 mt-3">

                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/chef1.jpg">

                        <div class="food-body">

                            <h5>Chef Moazzam</h5>

                            <p>Italian Specialist</p>

                        </div>

                    </div>

                </div>

                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/chef3.jpg">

                        <div class="food-body">
                            <h5>Chef Ahmed</h5>

                            <p>Executive Chef</p>

                            <!-- <a href="#" class="order-btn-small">Order</a> -->

                        </div>

                    </div>

                </div>

                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/chef2.jpg">

                        <div class="food-body">

                            <h5>Chef Roman</h5>

                            <p>BBQ Master</p>
                        </div>

                    </div>

                </div>

                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/chef.jpg">

                        <div class="food-body">

                            <h5>Chef Asad</h5>

                            <p>Dessert Expert</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- WHY CHOOSE US -->

    <section class="why-us py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold text-warning">

                    Why Choose Us

                </h2>

                <p>

                    We always focus on quality, hygiene and customer satisfaction.

                </p>

            </div>

            <div class="row">

                <div class="col-lg-4">

                    <div class="about-box">

                        <i class="fa-solid fa-utensils"></i>

                        <h4 class="text-warning">Fresh Food</h4>

                        <p>
                            Prepared daily using premium ingredients.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="about-box">

                        <i class="fa-solid fa-user-tie"></i>

                        <h4 class="text-warning">Expert Chefs</h4>

                        <p>
                            Highly experienced chefs with international recipes.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="about-box">

                        <i class="fa-solid fa-truck-fast"></i>

                        <h4 class="text-warning">Fast Delivery</h4>

                        <p>
                            Quick delivery with fresh and hot meals.
                            No delivery charges.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- COUNTERS -->

    <section class="py-5 bg-light">

        <div class="container">

            <div class="row text-center">

                <div class="col-md-3">

                    <h2 class="text-warning fw-bold">15+</h2>

                    <h5>Years Experience</h5>

                </div>

                <div class="col-md-3">

                    <h2 class="text-warning fw-bold">2500+</h2>

                    <h5>Happy Customers</h5>

                </div>

                <div class="col-md-3">

                    <h2 class="text-warning fw-bold">80+</h2>

                    <h5>Professional Staff</h5>

                </div>

                <div class="col-md-3">

                    <h2 class="text-warning fw-bold">150+</h2>

                    <h5>Food Items</h5>

                </div>

            </div>

        </div>

    </section>




    <!-- CALL TO ACTION -->

    <section class="py-5 text-center bg-warning">

        <div class="container">

            <h2 class="fw-bold">

                Reserve Your Table Today

            </h2>

            <p>

                Book your table now and enjoy a premium dining experience.

            </p>

            <a href="reservation.php" class="btn btn-dark px-5 py-3">

                Book Now

            </a>

        </div>

    </section>

    <!-- <?php include("includes/footer.php"); ?> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>