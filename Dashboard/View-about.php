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
                        <h4 class="card-title">View All About</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title 1</th>
                                        <th scope="col">Discraption 1</th>
                                        <th scope="col">Title 2</th>
                                        <th scope="col">Discraption 2</th>
                                        <th scope="col">Title 3</th>
                                        <th scope="col">Discraption 3</th>
                                        <th scope="col">Title 4</th>
                                        <th scope="col">Discraption 4</th>
                                        <th scope="col">Title 5</th>
                                        <th scope="col">Discraption 5</th>
                                        <th scope="col">Title 6</th>
                                        <th scope="col">Discraption 6</th>
                                        <th scope="col">Title 7</th>
                                        <th scope="col">Discraption 7</th>
                                        <th scope="col">Title 8</th>
                                        <th scope="col">Discraption 8</th>
                                        <th scope="col">Title 9</th>
                                        <th scope="col">Discraption 9</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query="SELECT * FROM `about`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_array($result)): 
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_about']; ?>" title="<?php echo $row['img_about']; ?>" alt="icon-tab" width="50px" height="50px">
                                        </td>
                                        </td>
                                        <td><?php echo $row['title_about1']; ?></td>
                                        <td><?php echo $row['discraption_about1']; ?></td>
                                        <td><?php echo $row['title_about2']; ?></td>
                                        <td><?php echo $row['discraption_about2']; ?></td>
                                        <td><?php echo $row['title_about3']; ?></td>
                                        <td><?php echo $row['discraption_about3']; ?></td>
                                        <td><?php echo $row['title_about4']; ?></td>
                                        <td><?php echo $row['discraption_about4']; ?></td>
                                        <td><?php echo $row['title_about5']; ?></td>
                                        <td><?php echo $row['discraption_about5']; ?></td>
                                        <td><?php echo $row['title_about6']; ?></td>
                                        <td><?php echo $row['discraption_about6']; ?></td>
                                        <td><?php echo $row['title_about7']; ?></td>
                                        <td><?php echo $row['discraption_about7']; ?></td>
                                        <td><?php echo $row['title_about8']; ?></td>
                                        <td><?php echo $row['discraption_about8']; ?></td>
                                        <td><?php echo $row['title_about9']; ?></td>
                                        <td><?php echo $row['discraption_about9']; ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-abouts.php?edit_about=<?php echo $row['id_about']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
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