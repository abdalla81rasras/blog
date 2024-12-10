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
                        <h4>Update Contact</h4>
                    <?php else: ?>
                        <h4>Add New Contact</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_contact" value="<?php echo $id_contact; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row mt-3">
                            <div class="form-group col-md-12">
                                <h5 class="text-primary">Contact :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-7">
                                <label class="text-dark">Phone :</label>
                                <input type="text" class="form-control" name="phone_contact" value="<?php echo htmlspecialchars($phone_contact); ?>" placeholder="Enter Phone Number [ 000-000-0000 ]">
                                <div class="text-danger mt-1"><?php echo $errors['phone_contact'] ?></div>
                            </div>
                        </div> 
                        <div class="form-row mb-4">   
                            <div class="form-group col-md-7">
                                <label class="text-dark">Email :</label>
                                <input type="email" class="form-control" name="email_contact" value="<?php echo htmlspecialchars($email_contact); ?>" placeholder="Enter Email ...">
                                <div class="text-danger mt-1"><?php echo $errors['email_contact'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-2">    
                            <div class="form-group col-md-7">
                                <label class="text-dark">Address :</label>
                                <input type="text" class="form-control" name="address_contact" value="<?php echo htmlspecialchars($address_contact); ?>" placeholder="Enter Addres ...">
                                <div class="text-danger mt-1"><?php echo $errors['address_contact'] ?></div>
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
                                <button name="update_contact" class="btn btn-primary">Update</button>
                            <?php else: ?>
                                <button name="save_contact" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                                <button class="btn btn-primary" name="cansel_contact">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "inc/footer.php" ?>