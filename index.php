<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie's Restaurant</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->

    <section class="hero">



        <div class="container">

            <div class="row align-items-center min-vh-100">

                <div class="col-lg-7">

                    <span class="hero-subtitle" data-aos="fade-right">
                        Welcome To Foodie's
                    </span>

                    <h1 data-aos="fade-up">

                        Delicious Food

                        <br>

                        Amazing Taste

                    </h1>

                    <p data-aos="fade-up" data-aos-delay="200">

                        Enjoy fresh food prepared by professional chefs with
                        premium ingredients and unforgettable taste.

                    </p>

                    <div class="mt-4" data-aos="zoom-in">

                        <a href="#" class="btn btn-warning hero-btn">

                            Order Now

                        </a>

                        <a href="reservation.php" class="btn btn-outline-light hero-btn2">

                            Book Table

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ===================== FEATURED DISHES ===================== -->

    <section class="featured py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title text-warning">Featured Dishes</h2>

                <p class="section-subtitle text-warning">
                <h3>Our most popular and delicious food items</h3>
                </p>

            </div>

            <div class="row g-4">

                <!-- CARD 1 -->
                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/bergur1.jpg">

                        <div class="food-body">

                            <h5>Chicken Burger</h5>

                            <div class="rating">
                                ⭐⭐⭐⭐⭐
                            </div>

                            <p>Juicy grilled chicken burger with...</p>

                            <div class="price">
                                $8.99
                            </div>

                            <a href="#" class="order-btn-small">Order Now</a>

                        </div>

                    </div>

                </div>

                <!-- CARD 2 -->
                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/pizza1.jpg" alt="Food Image">

                        <div class="food-body">

                            <h5>Pizza</h5>

                            <div class="rating">⭐⭐⭐⭐⭐</div>

                            <p>Cheesy pizza with fresh toppings</p>

                            <div class="price">$12.99</div>

                            <a href="#" class="order-btn-small">Order Now</a>

                        </div>

                    </div>

                </div>
                <!-- card-3 -->
                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/steak.jpg">

                        <div class="food-body">

                            <h5>Grilled Chicken Steak</h5>

                            <div class="rating">⭐⭐⭐⭐⭐</div>

                            <p>Juicy grilled chicken served with...</p>

                            <div class="price">$10.99</div>

                            <a href="#" class="order-btn-small">Order Now</a>

                        </div>

                    </div>

                </div>

                <!-- CARD 4 -->
                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img
                            src="assets/images/beef-burger.jpg">

                        <div class="food-body">

                            <h5>Beef Burger</h5>

                            <div class="rating">⭐⭐⭐⭐⭐</div>

                            <p>Smoky beef burger with sauce</p>

                            <div class="price">$9.99</div>

                            <a href="#" class="order-btn-small">Order Now</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        </div>
    </section>
    <!-- ===================== WHY CHOOSE US ===================== -->

    <section class="why py-5">

        <div class="container">

            <div class="row align-items-center">

                <!-- LEFT IMAGE -->
                <div class="col-lg-6 left-image">

                    <img src="assets/images/hall2.jpg" class="img-fluid rounded-4">

                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-6">

                    <h2 class="section-title text-warning">Why Choose Us</h2>

                    <p class="text-white">
                        We provide high quality food with fast delivery and professional chefs.
                    </p>

                    <div class="feature-box">

                        <h5>🍽️ Fresh Food</h5>
                        <p>We use fresh ingredients daily</p>

                    </div>

                    <div class="feature-box">

                        <h5>👨‍🍳 Expert Chefs</h5>
                        <p>Professional and experienced chefs</p>

                    </div>

                    <div class="feature-box">

                        <h5>🚀 Fast Delivery</h5>
                        <p>Quick and safe delivery at your door</p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ===================== GALLERY ===================== -->

    <section class="gallery py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title text-warning">Our Gallery</h2>

                <p class="section-subtitle ">
                <h3>Delicious moments captured in our kitchen</h3>
                </p>

            </div>

            <div class="row g-3">

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="assets/images/briyani.jpg">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="assets/images/pizza1.jpg">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="assets/images/chiken-burgur.jpg">
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ===================== TESTIMONIALS ===================== -->

    <section class="testimonials py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">What Customers Say</h2>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="testimonial-card">

                        <p>"Amazing food quality and fast service. Highly recommended!"</p>

                        <h6>- Ali Khan</h6>

                        <span>⭐⭐⭐⭐⭐</span>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="testimonial-card">

                        <p>"Best restaurant experience. Love their burgers!"</p>

                        <h6>-Ahmed</h6>

                        <span>⭐⭐⭐⭐⭐</span>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="testimonial-card">

                        <p>"Very clean environment and tasty food.Love their pizza!"</p>

                        <h6>- Asad</h6>

                        <span>⭐⭐⭐⭐⭐</span>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ===================== FOOTER ===================== -->

    <footer class="footer py-5">

        <div class="container">

            <div class="row">

                <div class="col-lg-4">

                    <h4>Foodie's</h4>

                    <p>Best restaurant for delicious and fresh food with fast delivery service.</p>

                </div>

                <div class="col-lg-4">

                    <h5>Quick Links</h5>

                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </div>

                <div class="col-lg-4">

                    <h5>Contact</h5>

                    <p>Email: info@foodies.com</p>
                    <p>Phone: +92 300 0000000</p>

                </div>

            </div>

            <hr>

            <p class="text-center">© 2026 Foodie's Restaurant. All Rights Reserved.</p>

        </div>

    </footer>

    <!-- JS -->

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
    AOS.init({
        duration: 1000,
        once: true
    });
    </script>

    <script src="assets/js/script.js"></script>

</body>

</html>