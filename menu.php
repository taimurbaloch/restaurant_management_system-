<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Navbar -->

   <?php include 'includes/navbar.php'; ?>
    <!-- Hero -->

    <section class="bg-dark text-white text-center mt-5 py-5">

        <div class="container">

            <h1 class="display-4 fw-bold">Our Delicious Menu</h1>

            <p class="lead">
                Fresh Food • Premium Taste • Best Quality
            </p>

        </div>

    </section>

    <!-- Menu -->

    <section class="py-5" style="background-image: url('https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">

        <div class="container">

            <div class="row g-4">

                <!-- Card 1 -->

                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/pizza1.jpg"
                            class="card-img-top">

                        <div class="food-body">

                            <h5>Italian Pizza</h5>

                            <p>Cheesy pizza with fresh toppings.</p>

                            <h4 class="price">$15</h4>

                            <a href="#" class="order-btn-small">
                                Order Now
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 2 -->

                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/beef-burger.jpg"
                            class="card-img-top">

                        <div class="food-body">

                            <h5>Beef Burger</h5>

                            <p>Grilled burger with cheese.</p>

                            <h4 class="price">$12</h4>

                            <a href="#" class="order-btn-small">
                                Order Now
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 3 -->

                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/briyani.jpg"
                            class="card-img-top">

                        <div class="food-body">

                            <h5>Chicken Biryani</h5>

                            <p>Traditional Pakistani biryani.</p>

                            <h4 class="price">$11</h4>

                            <a href="#" class="order-btn-small">
                                Order Now
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 4 -->

                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/pasta.jpg"
                            class="card-img-top">

                        <div class="food-body">

                            <h5>Creamy Pasta</h5>

                            <p>Italian white sauce pasta.</p>

                            <h4 class="price">$13</h4>

                            <a href="#" class="order-btn-small">
                                Order Now
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 5 -->

                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/steak.jpg"
                            class="card-img-top">

                        <div class="food-body">

                            <h5>BBQ Steak</h5>

                            <p>Grilled juicy steak.</p>

                            <h4 class="price">$22</h4>

                            <a href="#" class="order-btn-small">
                                Order Now
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 6 -->

                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/salad.jpg"
                            class="card-img-top">

                        <div class="food-body">

                            <h5>Fresh Salad</h5>

                            <p>Healthy Vegitable Salad.</p>

                            <h4 class="price">$9</h4>

                            <a href="#" class="order-btn-small">
                                Order Now
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 7 -->

                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/bergur1.jpg" class="card-img-top">

                        <div class="food-body">

                            <h5>Club Sandwich</h5>

                            <p>Triple layered sandwich.</p>

                            <h4 class="price">$8</h4>

                            <a href="#" class="order-btn-small">
                                Order Now
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Card 8 -->

                <div class="col-lg-3 col-md-6">

                    <div class="food-card">

                        <img src="assets/images/dessert.jpg"
                            class="card-img-top">

                        <div class="food-body">

                            <h5>Chocolate Cake</h5>

                            <p>Soft chocolate dessert.</p>

                            <h4 class="price">$7</h4>

                            <a href="#" class="order-btn-small">
                                Order Now
                            </a>

                        </div>

                    </div>

                </div>

            </div>

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

</body>

</html>