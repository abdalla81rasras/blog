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
                        <h4 class="card-title">View All Social Media Accouting : </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Facebook</th>
                                        <th scope="col">Twitter</th>
                                        <th scope="col">Instagram</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query2="SELECT * FROM `social_about`";
                                        $result=mysqli_query($conn , $query2);
                                        while($row=mysqli_fetch_array($result)):
                                    ?>
                                    <tr>
                                        <td><?php echo $row['facebook_about'] ?></td>
                                        <td><?php echo $row['twitter_about'] ?></td>
                                        <td><?php echo $row['instagram_about'] ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-social-about.php?edit_social_about=<?php echo $row['id_social_about']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
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