<?php 
include "inc/header.php";
include "inc/connection.php";
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">View All Contact</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query="SELECT * FROM `contact`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_assoc($result)): 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['phone_contact'] ?></td>
                                        <td><?php echo $row['email_contact'] ?></td>
                                        <td><?php echo $row['address_contact'] ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-contact.php?edit_contact=<?php echo $row['id_contact']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endwhile ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php" ?>