<nav class="navbar navbar-expand-lg fixed-top custom-navbar">

    <div class="container">

        <!-- LOGO -->

        <a class="navbar-brand" href="index.php">

            <i class="fa-solid fa-utensils"></i>

            Foodie's

        </a>

        <!-- MOBILE BUTTON -->

        <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

            <span>

                <i class="fa-solid fa-bars text-white fs-3"></i>

            </span>

        </button>

        <!-- MENU -->

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">

                    <a class="nav-link active" href="index.php">

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="about.php">

                        About

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="menu.php">

                        Menu

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="gallery.php">

                        Gallery

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="reservation.php">

                        Reservation

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="contact.php">

                        Contact

                    </a>

                </li>

            </ul>

            <!-- RIGHT SIDE -->

            <div class="d-flex align-items-center">
                <?php session_start();
                 if(isset($_SESSION['role']) && $_SESSION['role'] !=""): ?>
                <a href="process/logout.php" class="order-btn">logout</a>
                <?php else: ?>
                <a href="login.php" class="order-btn">Login</a>
                <?php endif ?>

                <a href="reservation.php" class="order-btn">

                    Order Now

                </a>

            </div>

        </div>

    </div>

</nav>
