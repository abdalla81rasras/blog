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
                        <h4 class="card-title">View All Blogs</h4>
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
                                        <th scope="col">Discraption</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query="SELECT * FROM `blogs`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_assoc($result)): 
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_blogs']; ?>" title="<?php echo $row['img_blogs']; ?>" alt="icon-tab" width="50px" height="50px">
                                        </td>
                                        <td><?php echo $row['title_blogs']; ?></td>
                                        <td><?php echo $row['sub_title_blogs']; ?></td>
                                        <td><?php echo $row['name_blogger_blogs']; ?></td>
                                        <td><?php echo $row['datepicker_blogs']; ?></td>
                                        <td><?php echo $row['discraption_blogs']; ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-blogs.php?edit_blog=<?php echo $row['id_blog']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
                                                </a>
                                                <a href="Add-blogs.php?delete_blog=<?php echo $row['id_blog']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
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