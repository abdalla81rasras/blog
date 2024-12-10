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
                        <h4>Update About</h4>
                    <?php else: ?>
                        <h4>Add New About</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_about" value="<?php echo $id_about; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-2 mt-2">
                                <h5 class="text-primary">About :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-md-7">
                                <label class="text-dark">Image :</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" accept="Image/*" name="img_about">
                                </div> 
                                <div class="text-danger mt-1"><?php echo $errors['img_about'] ?></div>
                                <div class="d-flex flex-column">
                                    <?php if($edit==true): ?>
                                        <p class="text-warning mb-0 mt-1"><?php echo $errors['edit_img_about'] ?></p> <br>
                                        <div class="d-flex align-items-center">
                                        <p class="text-primary font-weight-bold mr-3 ">Old Image :  </p>
                                        <img src="upload/<?php echo $img_about ?>" title="<?php echo $img_about; ?>" alt="Image-about" style="width:100px; height: 100px;">
                                        </div>
                                    <?php endif; ?>
                                </div>                           
                            </div>
                        </div> 
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 1 :</label>
                                <input type="text" class="form-control" name="title_about1" value="<?php echo htmlspecialchars($title_about1); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about1'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 1 :</label>
                                <textarea name="discraption_about1" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about1); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about1'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 2 :</label>
                                <input type="text" class="form-control" name="title_about2" value="<?php echo htmlspecialchars($title_about2); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about2'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 2 :</label>
                                <textarea name="discraption_about2" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about2); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about2'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 3 :</label>
                                <input type="text" class="form-control" name="title_about3" value="<?php echo htmlspecialchars($title_about3); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about3'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 3 :</label>
                                <textarea name="discraption_about3" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about3); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about3'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 4 :</label>
                                <input type="text" class="form-control" name="title_about4" value="<?php echo htmlspecialchars($title_about4); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about4'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 4 :</label>
                                <textarea name="discraption_about4" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about4); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about4'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 5 :</label>
                                <input type="text" class="form-control" name="title_about5" value="<?php echo htmlspecialchars($title_about5); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about5'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 5 :</label>
                                <textarea name="discraption_about5" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about5); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about5'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 6 :</label>
                                <input type="text" class="form-control" name="title_about6" value="<?php echo htmlspecialchars($title_about6); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about6'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 6 :</label>
                                <textarea name="discraption_about6" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about6); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about6'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 7 :</label>
                                <input type="text" class="form-control" name="title_about7" value="<?php echo htmlspecialchars($title_about7); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about7'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 7 :</label>
                                <textarea name="discraption_about7" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about7); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about7'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 8 :</label>
                                <input type="text" class="form-control" name="title_about8" value="<?php echo htmlspecialchars($title_about8); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about8'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 8 :</label>
                                <textarea name="discraption_about8" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about8); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about8'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Title - 9 :</label>
                                <input type="text" class="form-control" name="title_about9" value="<?php echo htmlspecialchars($title_about9); ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_about9'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-2">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Discraption - 9 :</label>
                                <textarea name="discraption_about9" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_about9); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_about9'] ?></div>
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
                                <button name="update_abouts" class="btn btn-primary">Update</button>
                            <?php else: ?>
                                <button name="save_abouts" class="btn btn-primary">Save</button>
                            <?php endif; ?>                            
                                <button class="btn btn-primary" name="cansel_abouts">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "inc/footer.php" ?>