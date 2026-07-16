
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact - Foodie's</title>

<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php include 'includes/navbar.php'; ?>

<section class="py-5 mt-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <h2 class="section-title">Contact Us</h2>

                <form action="contact/contact_process.php" method="POST">

                    <input type="text" name="name" class="form-control mb-3" placeholder="Your Name">

                    <input type="email" name="email" class="form-control mb-3" placeholder="Your Email">

                    <textarea class="form-control mb-3" name="message" rows="5" placeholder="Message"></textarea>

                    <button class="btn btn-warning" type="submit">Send Message</button>

                </form>

            </div>

            <div class="col-lg-6 text-dark">

                <h5>Our Info</h5>

                <p>Email: info@foodies.com</p>
                <p>Phone: +92 300 0000000</p>
                <p>Address: Dera Ismail Khan, Pakistan</p>

                <iframe
                    src="https://www.google.com/maps?q=dera%20ismail%20khan&output=embed"
                    width="100%"
                    height="250"
                    style="border:0;"
                ></iframe>

            </div>

        </div>

    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if(isset($_SESSION['success'])): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '<?php echo $_SESSION["success"]; ?>',
        confirmButtonColor: '#28a745'
    });
    </script>
    <?php
unset($_SESSION['success']);
endif;
?>
</body>
</html>