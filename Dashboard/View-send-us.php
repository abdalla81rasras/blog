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
                        <h4 class="card-title">View All Form Send Us</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                        $query="SELECT * FROM `form_us`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_assoc($result)): 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['name_form_us']; ?></td>
                                        <td><?php echo $row['email_form_us']; ?></td>
                                        <td><?php echo $row['subject_form_us']; ?></td>
                                        <td><?php echo $row['message_form_us']; ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-contact.php?delete_form_us=<?php echo $row['id_form_us']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endwhile ; ?>
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