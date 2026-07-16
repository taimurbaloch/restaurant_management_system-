<?php include("includes/header.php")?>
<div class="row g-4">
    <?php include("config/db.php");?>
    <?php
    //  FOR TOTAL CUSTOMERS
     $q = "select count(*) as total_customers from users where role='customer'";
    $result = $conn->query($q);
    $total = $result->fetch_assoc();
    // FOR TOTAL Orders
     $q = "select count(*) as total_orders from reservations ";
    $result = $conn->query($q);
    $totals = $result->fetch_assoc();
    // // FOR CONFRIMD Orders
     $q = "select count(*) as orders from reservations where status='Confirmed'";
    $result = $conn->query($q);
    $row = $result->fetch_assoc();
    ?>

    <div class="col-lg-3">

        <div class="card dashboard-card bg-primary text-white">

            <h2><?php echo $totals['total_orders']; ?></h2>

            <p>Total Orders</p>

            <i class="fa-solid fa-cart-shopping"></i>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card dashboard-card bg-success text-white">

            <h2><?php echo $row['orders']; ?></h2>

            <p>Reservations</p>

            <i class="fa-solid fa-calendar-check"></i>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card dashboard-card bg-warning text-dark">

            <h2> <?php echo $total['total_customers']; ?> </h2>

            <p>Customers</p>

            <i class="fa-solid fa-users"></i>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card dashboard-card bg-danger text-white">

            <h2>$12,450</h2>

            <p>Revenue</p>

            <i class="fa-solid fa-dollar-sign"></i>

        </div>

    </div>

</div>

<!-- Quick Actions -->

<div class="row mt-5 g-4">

    <div class="col-lg-3">

        <div class="card text-center shadow p-4">

            <i class="fa-solid fa-utensils fa-3x text-warning mb-3"></i>

            <h5>Manage Menu</h5>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card text-center shadow p-4">

            <i class="fa-solid fa-image fa-3x text-primary mb-3"></i>

            <h5>Gallery</h5>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card text-center shadow p-4">

            <i class="fa-solid fa-users fa-3x text-success mb-3"></i>

            <h5>Customers</h5>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card text-center shadow p-4">

            <i class="fa-solid fa-envelope fa-3x text-danger mb-3"></i>

            <h5>Messages</h5>

        </div>

    </div>

</div>

</div>

</div>
<?php include("includes/footer.php")?>