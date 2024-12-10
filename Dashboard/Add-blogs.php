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
                        <h4>Update Blogs</h4>
                    <?php else: ?>
                        <h4>Add New Blogs</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_blog" value="<?php echo $id_blog; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-2 mt-2">
                                <h5 class="text-primary">Blog :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-md-7">
                                <label class="text-dark">Image :</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" accept="Image/*" name="img_blogs">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_blogs'] ?></div>
                                <div class="d-flex flex-column">
                                    <?php if($edit==true): ?>
                                        <p class="text-warning mb-0 mt-1"><?php echo $errors['edit_img_blogs'] ?></p> <br>
                                        <div class="d-flex align-items-center">
                                        <p class="text-primary font-weight-bold mr-3 ">Old Image :  </p>
                                        <img src="upload/<?php echo $img_blogs ?>" title="<?php echo $img_blogs; ?>" alt="Image-blog" style="width:100px; height: 100px;">
                                        </div>
                                    <?php endif; ?>
                                </div>                            
                            </div>
                        </div> 
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title :</label>
                                <input type="text" class="form-control" name="title_blogs" value="<?php echo htmlspecialchars($title_blogs); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_blogs'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">    
                            <div class="form-group col-md-7">
                                <label class="text-dark">Sub Title :</label>
                                <input type="text" class="form-control" name="sub_title_blogs" value="<?php echo htmlspecialchars($sub_title_blogs); ?>" placeholder="Enter Sub Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['sub_title_blogs'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">    
                            <div class="form-group col-md-7">
                                <label class="text-dark">Name of Blogger :</label>
                                <input type="text" class="form-control" name="name_blogger_blogs" value="<?php echo htmlspecialchars($name_blogger_blogs); ?>" placeholder="Enter Name ...">
                                <div class="text-danger mt-1"><?php echo $errors['name_blogger_blogs'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">    
                            <div class="form-group col-md-7">
                                <label class="text-dark">Date :</label>
                                <input name="datepicker_blogs" value="<?php echo htmlspecialchars($datepicker_blogs); ?>" class="datepicker-default form-control" placeholder="Select Date" id="datepicker">
                                <div class="text-danger mt-1"><?php echo $errors['datepicker_blogs'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-2">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption :</label>
                                <textarea name="discraption_blogs" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_blogs); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_blogs'] ?></div>
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
                                <button name="update_blogs" class="btn btn-primary">Update</button>
                            <?php else: ?>
                                <button name="save_blogs" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                                <button class="btn btn-primary" name="cansel_blogs">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "inc/footer.php" ?>