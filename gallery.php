<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
    body {
        background: #f8f9fa;
    }

    /* Hero */

    .gallery-hero {
        background:
            linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),
            url("https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg");
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 120px 0;
    }

    .gallery-card {
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, .15);
        transition: .4s;
    }

    .gallery-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        transition: .4s;
    }

    .gallery-card:hover img {
        transform: scale(1.1);
    }

    .gallery-card:hover {
        transform: translateY(-8px);
    }
    </style>

</head>

<body>

    <!-- Navbar -->

    <?php include 'includes/navbar.php'; ?>

    <!-- Hero -->

    <section class="gallery-hero text-center">

        <div class="container">

            <h1 class="display-4 fw-bold">Restaurant Gallery</h1>

            <p class="lead">
                Take a look at our delicious food, beautiful dining area and memorable moments.
            </p>

        </div>

    </section>

    <!-- Gallery -->

    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">Our Gallery</h2>

                <p class="text-muted">

                    Food • Restaurant • Desserts • Drinks • Dining

                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/825661/pexels-photo-825661.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/1639557/pexels-photo-1639557.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/1437267/pexels-photo-1437267.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/2233729/pexels-photo-2233729.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/3026808/pexels-photo-3026808.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/12737656/pexels-photo-12737656.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card">
                        <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="">
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