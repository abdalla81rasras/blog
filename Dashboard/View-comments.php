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
                        <h4 class="card-title">View All Comments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Name of Comment</th>
                                        <th scope="col">Comment</th>
                                        <th scope="col">Date Comment</th>
                                        <th scope="col">email_comment_inner</th>
                                        <th scope="col">subject</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query="SELECT * FROM `comments`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_assoc($result)): 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['Name_of_Comment'] ?></td>
                                        <td><?php echo $row['comment'] ?></td>
                                        <td><?php $date_comment = date_create($row['created_at']); echo date_format($date_comment , 'd/m/y h:m:s'); ?></td>
                                        <td><?php echo $row['email_comment_inner'] ?></td>
                                        <td><?php echo $row['subject'] ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-inner.php?delete_comment=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
                                                    <i class="fa fa-close"></i>
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