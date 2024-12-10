<?php

if(isset($_POST['submit'])){

    $Name_of_Comment = mysqli_real_escape_string($conn , $_POST['Name_of_Comment']);
    $email_comment_inner = mysqli_real_escape_string($conn , $_POST['email_comment_inner']);
    $subject = mysqli_real_escape_string($conn , $_POST['subject']);
    $Comment = mysqli_real_escape_string($conn , $_POST['Comment']);

    $sql="INSERT INTO `comments`(`Name_of_Comment`,`email_comment_inner`,`subject`,`Comment`) VALUES('$Name_of_Comment','$email_comment_inner','$subject','$Comment')";

    if(mysqli_query($conn , $sql)){

    }else{
        echo 'query error !' . mysqli_error($conn);
    }

    header("Location:inner_blog.php?comment=success_comment");

}

if(isset($_POST['submit_sub'])){

    $Name_of_Sub_Comment = mysqli_real_escape_string($conn , $_POST['Name_of_Sub_Comment']);
    $sub_comment = mysqli_real_escape_string($conn , $_POST['sub_comment']);
    $id_comment_to_sub = mysqli_real_escape_string($conn , $_POST['id_comment_to_sub']);

    $sql="INSERT INTO `sub_comments`(`Name_of_Sub_Comment`,`sub_comment`,`parent_id`) VALUES('$Name_of_Sub_Comment','$sub_comment','$id_comment_to_sub')";

    if(mysqli_query($conn , $sql)){

    }else{
        echo 'query error !' . mysqli_error($conn);
    }

    header("Location:inner_blog.php?sub_comment=success_subcomment");

}

?>