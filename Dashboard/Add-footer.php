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
                        <h4>Update Footer</h4>
                    <?php else: ?>
                        <h4>Add New Footer</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_footer" value="<?php echo $id_footer; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row mt-3">
                            <div class="form-group col-md-12">
                                <h5 class="text-primary">Social Accountes :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-7">
                                <label class="text-dark">Facebook :</label>
                                <input type="text" class="form-control" name="facebook_footer" value="<?php echo htmlspecialchars($facebook_footer); ?>" placeholder="Copy Link https:// ...">
                                <div class="text-danger mt-1"><?php echo $errors['facebook_footer'] ?></div>    
                            </div>
                        </div> 
                        <div class="form-row mb-4">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Twitter :</label>
                                <input type="text" class="form-control" name="twitter_footer" value="<?php echo htmlspecialchars($twitter_footer); ?>" placeholder="Copy Link https:// ...">
                                <div class="text-danger mt-1"><?php echo $errors['twitter_footer'] ?></div>    
                            </div>
                        </div>
                        <div class="form-row mb-2">    
                            <div class="form-group col-md-7">
                                <label class="text-dark">Instagram :</label>
                                <input type="text" class="form-control" name="instagram_footer" value="<?php echo htmlspecialchars($instagram_footer); ?>" placeholder="Copy Link https:// ...">
                                <div class="text-danger mt-1"><?php echo $errors['instagram_footer'] ?></div>
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
                            <button name="update_foot" class="btn btn-primary">Update</button>
                        <?php else: ?>
                            <button name="save_foot" class="btn btn-primary">Save</button>
                        <?php endif; ?>
                            <button class="btn btn-primary" name="cansel_foot">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "inc/footer.php"; ?>