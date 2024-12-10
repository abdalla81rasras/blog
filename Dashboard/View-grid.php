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
                        <h4 class="card-title">View All Grid Blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">sub Title</th>
                                        <th scope="col">Name of Bloger</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Comments</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query="SELECT * FROM `grid`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_assoc($result)): 
                                     ?>
                                    <tr>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_grid']; ?>" title="<?php echo $row['img_grid']; ?>" alt="icon-tab" width="50px" height="50px">
                                        </td>
                                        <td><?php echo $row['title_grid']; ?></td>
                                        <td><?php echo $row['sub_title_grid']; ?></td>
                                        <td><?php echo $row['name_blogger_grid']; ?></td>
                                        <td><?php echo $row['datepicker_grid']; ?></td>
                                        <td><?php echo $row['num_comments_grid']; ?> Comments</td>
                                        <td>
                                            <span>
                                                <a href="Add-grid.php?edit_grid=<?php echo $row['id_grid']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
                                                </a>
                                                <a href="Add-grid.php?delete_grid=<?php echo $row['id_grid']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
                                                    <i class="fa fa-close"></i>
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