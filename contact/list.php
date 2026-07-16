<?php include("../includes/header2.php"); ?>

         <div class="card mt-5 shadow">

                    <div class="card-header">

                        <h4>

                            Messages

                        </h4>

                    </div>

                    <div class="card-body table-responsive">

                        <table class="table table-hover">
                            <thead>

                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Received_at</th>
                                    <th>Actions</th>

                                </tr>

                            </thead>

                            <?php include("../config/db.php");
                             $q="select * from contact_messages order by id desc";
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
                                    <td><?php echo $row['message'];?></td>

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
