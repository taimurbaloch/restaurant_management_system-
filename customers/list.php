<?php include("../includes/header2.php"); ?>

 <!-- Table -->

                <div class="card mt-5 shadow">

                    <div class="card-header">

                        <h4>

                            Customers

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
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Registered_at</th>
                                    <th>Actions</th>

                                </tr>

                            </thead>

                            <?php include("../config/db.php");
                             $q="select * from users where role ='customer' order by id desc";
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
                                    <td><?php echo $row['password'];?></td>
                                    <td><?php echo $row['role'];?></td>

                                    <!-- status column -->
                            
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
