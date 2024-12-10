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
                        <h4 class="card-title">View All Replies Comments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Name of Reply</th>
                                        <th scope="col">Reply Comment</th>
                                        <th scope="col">Date Reply Comment</th>
                                        <th scope="col">Name comment Main</th>
                                        <th scope="col">Subject comment Main</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query="SELECT * FROM `sub_comments`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_assoc($result)): 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['Name_of_Sub_Comment'] ?></td>
                                        <td><?php echo $row['sub_comment'] ?></td>
                                        <td><?php $date_sub_comment = date_create($row['created_at']); echo date_format($date_sub_comment , 'd/m/y h:m:s') ?></td>
                                        <td>
                                            <?php
                                                $query_comment_Name = "SELECT `Name_of_Comment` FROM `comments` WHERE `id`='".$row['parent_id']."'";
                                                $result_comment_Name = mysqli_query($conn , $query_comment_Name);
                                                $row_comment_Name = mysqli_fetch_assoc($result_comment_Name);
                                                $Name_of_Comment = $row_comment_Name['Name_of_Comment'];
                                                echo $Name_of_Comment;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                $query_comment_subject = "SELECT `subject` FROM `comments` WHERE `id`='".$row['parent_id']."'";
                                                $result_comment_subject = mysqli_query($conn , $query_comment_subject);
                                                $row_comment_subject = mysqli_fetch_assoc($result_comment_subject);
                                                $subject = $row_comment_subject['subject'];
                                                echo $subject;
                                            ?>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="Add-inner.php?delete_sub_comment=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
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