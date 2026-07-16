<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Royal Restaurant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
    body {

        background:
            linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
            url("assets/images/hall2.jpg");

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

        min-height: 100vh;

        display: flex;
        justify-content: center;
        align-items: center;

        font-family: Arial, Helvetica, sans-serif;

        padding: 20px;
         overflow: hidden;
    }

    .register-box {

        background: rgba(255, 255, 255, 0.12);

        backdrop-filter: blur(15px);

        -webkit-backdrop-filter: blur(15px);

        border: 1px solid rgba(255, 255, 255, 0.2);

        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);

        border-radius: 20px;
        /* margin-bottom:15px; */
        color: white;
        padding: 20px;
       
         /* height:650px; */
        width: 450px;

    }

    .logo {

        font-size: 40px;

        color: #ffc107;

        margin-bottom: 10px;

    }

    .form-control {

        background: rgba(255, 255, 255, 0.15);

        border: 1px solid rgba(255, 255, 255, 0.2);

        color: white;

    }

    .input-group-text {

        background: rgba(255, 255, 255, 0.15);

        border: 1px solid rgba(255, 255, 255, 0.2);

        color: white;

    }

    .form-control:focus {

        background: rgba(255, 255, 255, 0.20);

        color: white;

        box-shadow: none;

        border-color: #ffc107;

        height: 50px;
    }

    .form-control::placeholder {

        color: #ddd;

    }

    .btn-register {

        background: #ffc107;

        color: #000;

        height: 50px;

        font-weight: bold;

        transition: .3s;

    }

    .btn-register:hover {

        background: #e0a800;

        color: #fff;

    }

    /*=========================
        LINKS
==========================*/

    a {

        text-decoration: none;

        color: #ff9800;

        transition: .35s ease;

        font-weight: 500;

        position: relative;

    }

    /* Hover */

    a:hover {

        color: #ffc107;

    }

    /* Underline Animation */

    a::after {

        content: "";

        position: absolute;

        left: 0;

        bottom: -3px;

        width: 0;

        height: 2px;

        background: #ffc107;

        transition: .35s;

    }

    a:hover::after {

        width: 100%;

    }

    /* Autofill (Chrome, Edge) */

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    textarea:-webkit-autofill,
    select:-webkit-autofill {

        -webkit-text-fill-color: #fff !important;

        -webkit-box-shadow: 0 0 0px 1000px rgba(255, 255, 255, .12) inset !important;

        transition: background-color 5000s ease-in-out 0s;

    }
    </style>

</head>

<body>

    <div class="register-box">

        <div class="text-center mb-4">

            <div class="logo">

                <i class="fa-solid fa-utensils"></i>

            </div>

            <h2 class="fw-bold">

                Royal Restaurant

            </h2>

            <p class="text-white">

                Create Your Account

            </p>

        </div>

        <form action="process/register_process.php" method="POST">

            <div class="mb-2">

                <label>Full Name</label>

                <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required>

            </div>

            <div class="mb-2">

                <label>Email Address</label>

                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>

            </div>

            <div class="mb-2">

                <label>Phone Number</label>

                <input type="text" name="phone" class="form-control" placeholder="03XXXXXXXXX" required>

            </div>

            <div class="mb-3">

                <label>Password</label>

                <div class="input-group">

                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter Password" required>

                    <span class="input-group-text" onclick="togglePassword()" style="cursor:pointer;">

                        <i class="fa-solid fa-eye" id="eyeIcon"></i>

                    </span>

                </div>

            </div>
            <button class="btn btn-register w-100">

                <i class="fa-solid fa-user-plus"></i>

                Create Account

            </button>

        </form>

        <hr>

        <div class="text-center">

            Already have an account?

            <a href="login.php">

                <b>Login Here</b>

            </a>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function togglePassword() {

        let password = document.getElementById("password");

        let eye = document.getElementById("eyeIcon");

        if (password.type == "password") {
            password.type = "text";
            eye.className = "fa-solid fa-eye-slash";
        } else {
            password.type = "password";
            eye.className = "fa-solid fa-eye";
        }

    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if(isset($_SESSION['error'])): ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Registration Failed',
        text: '<?php echo $_SESSION["error"]; ?>',
        confirmButtonColor: '#d33'

    });
    </script>
    <?php
unset($_SESSION['error']);
endif;
?>

    <?php if(isset($_SESSION['success'])): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '<?php echo $_SESSION["success"]; ?>',
        confirmButtonColor: '#28a745'
        }).then((result) => {
       if (result.isConfirmed) {
        window.location.href = "login.php";
    }
    });
    </script>
    <?php
unset($_SESSION['success']);
endif;
?>
</body>

</html>