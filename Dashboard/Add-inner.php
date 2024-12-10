<?php 
include "inc/header.php";
include "inc/connection.php";
include "inc/Functions.php";

?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-md-6 p-md-0">
                <div class="welcome-text">
                    <?php if($update==true && $edit==true): ?>
                        <h4>Update Inner Blog</h4>
                    <?php else: ?>
                        <h4>Add New Inner Blog</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_inners" value="<?php echo $id_inners; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row sb mb-4 mt-2">
                            <div class="form-group col-md-12 mb-3">
                                <h5 class="text-primary">Inner Blog :</h5>
                            </div>
                            <div class="form-group sub-sb col-md-6">
                                <label class="text-dark">Image :</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" accept="Image/*" name="img_inners">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_inners'] ?></div>
                                <div class="d-flex flex-column">
                                    <?php if($edit==true): ?>
                                        <p class="text-warning mb-0 mt-1"><?php echo $errors['edit_img_inners'] ?></p> <br>
                                        <div class="d-flex align-items-center">
                                        <p class="text-primary font-weight-bold mr-3 ">Old Image :  </p>
                                        <img src="upload/<?php echo $img_inners ?>" title="<?php echo $img_inners ?>" alt="Image-inner" style="width:100px; height: 100px;">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-dark">Title :</label>
                                <input type="text" class="form-control" name="title_inners" value="<?php echo htmlspecialchars($title_inners); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_inners'] ?></div>
                            </div>
                        </div>
                        <div class="form-row sb mb-4">
                            <div class="form-group sub-sb col-md-6">
                                <label class="text-dark">Sub Title :</label>
                                <input type="text" class="form-control" name="sub_title_inners" value="<?php echo htmlspecialchars($sub_title_inners); ?>" placeholder="Enter Sub Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['sub_title_inners'] ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-dark">Name of Blogger :</label>
                                <input type="text" class="form-control" name="name_blogger_inners" value="<?php echo htmlspecialchars($name_blogger_inners); ?>" placeholder="Enter Name ...">
                                <div class="text-danger mt-1"><?php echo $errors['name_blogger_inners'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-1">
                            <div class="form-group col-md-6">
                                <label class="text-dark">Date :</label>
                                <input name="datepicker_inners" value="<?php echo htmlspecialchars($datepicker_inners); ?>" class="datepicker-default form-control" placeholder="Select Date" id="datepicker">
                                <div class="text-danger mt-1"><?php echo $errors['datepicker_inners'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row justify-content-around py-2">
                            <?php if($update==true): ?>
                                <button name="update_inner" class="btn btn-primary">Update</button>
                            <?php else: ?>
                                <button name="save_inner" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                                <button class="btn btn-primary" name="cansel_inner">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "inc/footer.php" ?>