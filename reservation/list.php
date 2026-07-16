<?php include("../includes/header2.php"); ?>

 <!-- Table -->

                <div class="card mt-5 shadow">

                    <div class="card-header">

                        <h4>

                            Recent Reservations

                        </h4>

                    </div>

                    <div class="card-body table-responsive">

                        <table class="table table-hover">
                            <thead>

                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Guests</th>
                                    <th>Message</th>
                                    <th>Order</th>
                                    <th>Created_at</th>
                                    <th>Actions</th>

                                </tr>

                            </thead>

                            <?php include("../config/db.php");
                             $q="select * from reservations order by id desc";
                             $result=$conn->query($q);
                             $count="";
                             ?>
                            <tbody>
                                <?php
                                 $count=0;
                                 foreach($result as $row){ ?>
                                <tr>
                                    <td> <?php echo ++$count;?> </td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td><?php echo $row['reservation_date'];?></td>
                                    <td><?php echo $row['reservation_time'];?></td>
                                    <td><?php echo $row['guests'];?></td>
                                    <td><?php echo $row['message'];?></td>
                                    <!-- status column -->
                                    <td>
                                        <?php
                                        if($row['status']=='Pending'){?>
                                          <span class="badge bg-warning">
                                        <a class="text-dark text-decoration-none" href="../reservation/status.php?id=<?php echo $row['id'];?>">Pending...</a></span>
                                        <?php
                                        }elseif($row['status']=='Confirmed'){
                                        ?>
                                           <span class="badge bg-success">
                                        <a class="text-white text-decoration-none" href="../reservation/status.php?id=<?php echo $row['id'];?>">Confrimed</a></span>
                                           
                                        <?php
                                        }else{
                                            ?>
                                                <span class="badge bg-danger">
                                        <a class="text-white text-decoration-none" href="../reservation/status.php?id=<?php echo $row['id'];?>">Cancelled</a></span>
                                        <?php
                                        }
                                        ?>
                                      
                                    </td>
                                    <!-- end status -->
                                    <td><?php echo $row['created_at'];?></td>
                                    <td class="colspan-2">
                                        <!-- <a href="edit.php?id=<?php echo $row['id'];?>"
                                            class="btn btn-success mr-2">Edit</a> -->
                                        <a href="delete.php?id=<?php echo $row['id'];?>"
                                            class="btn btn-danger">delete</a></td>

                                </tr>
                                <?php }; ?>
                            </tbody>

                        </table>

                    </div>

                </div>

<?php include("../includes/footer.php"); ?>
