<?php
include "connection.php";
include "incFun.php";

//header
if(isset($_POST['save_head'])){

   if(empty($_FILES['img_tab']['name'])){
      $errors['img_tab']="No Selected Image !";
   }else{
      $img_tab = $_FILES['img_tab']['name'];
      $img_tabTamp = $_FILES["img_tab"]["tmp_name"];
      $folderimg_tab ="upload/" . $img_tab ;
      move_uploaded_file($img_tabTamp , $folderimg_tab);
   }

   if(empty($_POST['title_tab'])){
      $errors['title_tab']="No Title !";
   }else{
      $title_tab = $_POST['title_tab'];
   }

   if(empty($_POST['name_logo'])){
      $errors['name_logo']="No Name Logo !";
   }else{
      $name_logo = $_POST['name_logo'];
   }

   if(!array_filter($errors)){
      $img_tab = mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
      $title_tab = mysqli_real_escape_string($conn , $_POST['title_tab']);
      $name_logo = mysqli_real_escape_string($conn , $_POST['name_logo']);
      
      $sql="UPDATE `header` SET `img_tab`='$img_tab' ,`title_tab`='$title_tab' ,`name_logo`='$name_logo'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-header.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_header'])){
   $id_header=$_GET['edit_header'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `header` WHERE `id_header`='$id_header'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_tab = $row['img_tab'];
      $title_tab = $row['title_tab'];
      $name_logo = $row['name_logo'];
   }

   if(empty($_FILES['img_tab']['name'])){
      $errors['edit_img_tab']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_head'])){
   $id_header=$_POST['id_header'];

   if(empty($_FILES['img_tab']['name'])){
      $errors['img_tab']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_tab = $_FILES['img_tab']['name'];
      $img_tabTamp = $_FILES["img_tab"]["tmp_name"];
      $folderimg_tab ="upload/" . $img_tab ;
      move_uploaded_file($img_tabTamp , $folderimg_tab);
   }

   if(empty($_POST['title_tab'])){
      $errors['title_tab']="No Update Title !";
   }else{
      $title_tab = $_POST['title_tab'];
   }

   if(empty($_POST['name_logo'])){
      $errors['name_logo']="No Update Name Logo !";
   }else{
      $name_logo = $_POST['name_logo'];
   }

   $update=true;

   if(!array_filter($errors)){
      $img_tab = mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
      $title_tab = mysqli_real_escape_string($conn , $_POST['title_tab']);
      $name_logo = mysqli_real_escape_string($conn , $_POST['name_logo']);
      
      $sql="UPDATE `header` SET `img_tab`='$img_tab' ,`title_tab`='$title_tab' ,`name_logo`='$name_logo' WHERE `id_header`='$id_header'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-header.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//footer
if(isset($_POST['save_foot'])){
	
   if(empty($_POST['facebook_footer'])){
      $errors['facebook_footer']="No Link !";
   }else{
      $facebook_footer = $_POST['facebook_footer'];
   }

   if(empty($_POST['twitter_footer'])){
      $errors['twitter_footer']="No Link !";
   }else{
      $twitter_footer = $_POST['twitter_footer'];
   }

   if(empty($_POST['instagram_footer'])){
      $errors['instagram_footer']="No Link !";
   }else{
      $instagram_footer = $_POST['instagram_footer'];
   }

   if(!array_filter($errors)){
      $facebook_footer = mysqli_real_escape_string($conn , $_POST['facebook_footer']);
      $twitter_footer = mysqli_real_escape_string($conn , $_POST['twitter_footer']);
      $instagram_footer = mysqli_real_escape_string($conn , $_POST['instagram_footer']);

      $sql="UPDATE `footer` SET `facebook_footer`='$facebook_footer' ,`twitter_footer`='$twitter_footer' , `instagram_footer`='$instagram_footer'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-footer.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_footer'])){
   $id_footer=$_GET['edit_footer'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `footer` WHERE `id_footer`='$id_footer'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $facebook_footer = $row['facebook_footer'];
      $twitter_footer = $row['twitter_footer'];
      $instagram_footer = $row['instagram_footer'];
   }
}

if(isset($_POST['update_foot'])){
   $id_footer=$_POST['id_footer'];

   if(empty($_POST['facebook_footer'])){
      $errors['facebook_footer']="No Update Link !";
   }else{
      $facebook_footer = $_POST['facebook_footer'];
   }

   if(empty($_POST['twitter_footer'])){
      $errors['twitter_footer']="No Update Link !";
   }else{
      $twitter_footer = $_POST['twitter_footer'];
   }

   if(empty($_POST['instagram_footer'])){
      $errors['instagram_footer']="No Update Link !";
   }else{
      $instagram_footer  = $_POST['instagram_footer'];
   }

   $update=true;

   if(!array_filter($errors)){
      $facebook_footer = mysqli_real_escape_string($conn , $_POST['facebook_footer']);
      $twitter_footer = mysqli_real_escape_string($conn , $_POST['twitter_footer']);
      $instagram_footer = mysqli_real_escape_string($conn , $_POST['instagram_footer']);

      $sql="UPDATE `footer` SET `facebook_footer`='$facebook_footer' , `twitter_footer`='$twitter_footer' , `instagram_footer`='$instagram_footer'  WHERE `id_footer`= '$id_footer'";
      
      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-footer.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//slid bar
if(isset($_POST['save_slidebar'])){
	
   if(empty($_FILES['img_slidebar']['name'])){
      $errors['img_slidebar']="No Selected Image !";
   }else{
      $img_slidebar = $_FILES['img_slidebar']['name'];
      $img_slidebarTamp=$_FILES["img_slidebar"]["tmp_name"];
      $folderimg_slidebar ="upload/" . $img_slidebar ;
      move_uploaded_file($img_slidebarTamp , $folderimg_slidebar);
   }

   if(empty($_POST['title_slidebar'])){
       $errors['title_slidebar']="No Title !";
    }else{
       $title_slidebar = $_POST['title_slidebar'];
   }

   if(empty($_POST['sub_title_slidebar'])){
       $errors['sub_title_slidebar']="No Sub Title !";
    }else{
       $sub_title_slidebar = $_POST['sub_title_slidebar'];
   }

   if(empty($_POST['name_blogger_slidebar'])){
      $errors['name_blogger_slidebar']="No Name !";
   }else{
      $name_blogger_slidebar = $_POST['name_blogger_slidebar'];
  }

  if(empty($_POST['datepicker_slidebar'])){
      $errors['datepicker_slidebar']="No Date !";
   }else{
      $datepicker_slidebar  = $_POST['datepicker_slidebar'];
  }

   if(!array_filter($errors)){
      $img_slidebar = mysqli_real_escape_string($conn , $_FILES['img_slidebar']['name']);
      $title_slidebar = mysqli_real_escape_string($conn , $_POST['title_slidebar']);
      $sub_title_slidebar = mysqli_real_escape_string($conn , $_POST['sub_title_slidebar']);
      $name_blogger_slidebar = mysqli_real_escape_string($conn , $_POST['name_blogger_slidebar']);
      $datepicker_slidebar = mysqli_real_escape_string($conn , $_POST['datepicker_slidebar']);

      $sql="INSERT INTO `slide_bar`(`img_slidebar`,`title_slidebar`,`sub_title_slidebar`,`name_blogger_slidebar`,`datepicker_slidebar`) VALUES('$img_slidebar','$title_slidebar','$sub_title_slidebar','$name_blogger_slidebar','$datepicker_slidebar')";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-slidebar.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_slidebar'])){
   $id_slidebar=$_GET['delete_slidebar'];

   $sql="DELETE FROM `slide_bar` WHERE `id_slidebar`='$id_slidebar'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-slidebar.php';</script>"; 
   exit;
}

if(isset($_GET['edit_slidebar'])){
   $id_slidebar=$_GET['edit_slidebar'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `slide_bar` WHERE `id_slidebar`='$id_slidebar'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_slidebar = $row['img_slidebar'];
      $title_slidebar = $row['title_slidebar'];
      $sub_title_slidebar = $row['sub_title_slidebar'];
      $name_blogger_slidebar = $row['name_blogger_slidebar'];
      $datepicker_slidebar = $row['datepicker_slidebar'];
   }

   if(empty($_FILES['img_slidebar']['name'])){
      $errors['edit_img_slidebar']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_slidebar'])){
   $id_slidebar=$_POST['id_slidebar'];

   if(empty($_FILES['img_slidebar']['name'])){
      $errors['img_slidebar']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_slidebar = $_FILES['img_slidebar']['name'];
      $img_slidebarTamp=$_FILES["img_slidebar"]["tmp_name"];
      $folderimg_slidebar ="upload/" . $img_slidebar ;
      move_uploaded_file($img_slidebarTamp , $folderimg_slidebar);
   }

   if(empty($_POST['title_slidebar'])){
       $errors['title_slidebar']="No Update Title !";
    }else{
       $title_slidebar = $_POST['title_slidebar'];
   }

   if(empty($_POST['sub_title_slidebar'])){
       $errors['sub_title_slidebar']="No Update Sub Title !";
    }else{
       $sub_title_slidebar = $_POST['sub_title_slidebar'];
   }

   if(empty($_POST['name_blogger_slidebar'])){
      $errors['name_blogger_slidebar']="No Update Name !";
    }else{
      $name_blogger_slidebar = $_POST['name_blogger_slidebar'];
   }

   if(empty($_POST['datepicker_slidebar'])){
      $errors['datepicker_slidebar']="No Update Date !";
   }else{
      $datepicker_slidebar  = $_POST['datepicker_slidebar'];
   }

   $update=true;

   if(!array_filter($errors)){
      $img_slidebar = mysqli_real_escape_string($conn , $_FILES['img_slidebar']['name']);
      $title_slidebar = mysqli_real_escape_string($conn , $_POST['title_slidebar']);
      $sub_title_slidebar = mysqli_real_escape_string($conn , $_POST['sub_title_slidebar']);
      $name_blogger_slidebar = mysqli_real_escape_string($conn , $_POST['name_blogger_slidebar']);
      $datepicker_slidebar = mysqli_real_escape_string($conn , $_POST['datepicker_slidebar']);

      $sql="UPDATE `slide_bar` SET `img_slidebar`='$img_slidebar' ,`title_slidebar`='$title_slidebar' ,`sub_title_slidebar`='$sub_title_slidebar' ,`name_blogger_slidebar`='$name_blogger_slidebar' ,`datepicker_slidebar`='$datepicker_slidebar'  WHERE `id_slidebar`= '$id_slidebar'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-slidebar.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//blogs
if(isset($_POST['save_blogs'])){
	
   if(empty($_FILES['img_blogs']['name'])){
       $errors['img_blogs']="No Selected Image !";
   }else{
       $img_blogs = $_FILES['img_blogs']['name'];
       $img_blogsTamp = $_FILES["img_blogs"]["tmp_name"];
       $folderimg_blogs ="upload/" . $img_blogs ;
       move_uploaded_file($img_blogsTamp , $folderimg_blogs );
   }

   if(empty($_POST['title_blogs'])){
       $errors['title_blogs']="No Title !";
    }else{
       $title_blogs = $_POST['title_blogs'];
   }

   if(empty($_POST['sub_title_blogs'])){
       $errors['sub_title_blogs']="No Sub Title !";
    }else{
       $sub_title_blogs = $_POST['sub_title_blogs'];
   }

   if(empty($_POST['name_blogger_blogs'])){
      $errors['name_blogger_blogs']="No Name !";
   }else{
      $name_blogger_blogs = $_POST['name_blogger_blogs'];
  }

   if(empty( $_POST['datepicker_blogs'])){
      $errors['datepicker_blogs']="No Datepicker !";
   }else{
      $datepicker_blogs = $_POST['datepicker_blogs'];
   }

   if(empty($_POST['discraption_blogs'])){
      $errors['discraption_blogs']="No Discraption !";
   }else{
      $discraption_blogs = $_POST['discraption_blogs'];
   }

   if(!array_filter($errors)){
      $img_blogs = mysqli_real_escape_string($conn , $_FILES['img_blogs']['name']);
      $title_blogs = mysqli_real_escape_string($conn , $_POST['title_blogs']);
      $sub_title_blogs = mysqli_real_escape_string($conn , $_POST['sub_title_blogs']);
      $name_blogger_blogs = mysqli_real_escape_string($conn , $_POST['name_blogger_blogs']);
      $datepicker_blogs = mysqli_real_escape_string($conn , $_POST['datepicker_blogs']);
      $discraption_blogs = mysqli_real_escape_string($conn , $_POST['discraption_blogs']);

      $sql="INSERT INTO `blogs`(`img_blogs`,`title_blogs`,`sub_title_blogs`,`name_blogger_blogs`,`datepicker_blogs`,`discraption_blogs`) VALUES('$img_blogs','$title_blogs','$sub_title_blogs','$name_blogger_blogs','$datepicker_blogs','$discraption_blogs')";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-blogs.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_blog'])){
   $id_blog=$_GET['delete_blog'];

   $sql="DELETE FROM `blogs` WHERE `id_blog`='$id_blog'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-blogs.php';</script>"; 
   exit;
}

if(isset($_GET['edit_blog'])){
   $id_blog=$_GET['edit_blog'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `blogs` WHERE `id_blog`='$id_blog'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_blogs = $row['img_blogs'];
      $title_blogs = $row['title_blogs'];
      $sub_title_blogs = $row['sub_title_blogs'];
      $name_blogger_blogs = $row['name_blogger_blogs'];
      $datepicker_blogs = $row['datepicker_blogs'];
      $discraption_blogs = $row['discraption_blogs'];
   }

   if(empty($_FILES['img_blogs']['name'])){
      $errors['edit_img_blogs']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_blogs'])){
   $id_blog=$_POST['id_blog'];

   $update=true;

   if(empty($_FILES['img_blogs']['name'])){
       $errors['img_blogs']="No update image , or the original image must be selected when updating data !!";
   }else{
       $img_blogs = $_FILES['img_blogs']['name'];
       $img_blogsTamp = $_FILES["img_blogs"]["tmp_name"];
       $folderimg_blogs ="upload/" . $img_blogs ;
       move_uploaded_file($img_blogsTamp , $folderimg_blogs );
   }

   if(empty($_POST['title_blogs'])){
       $errors['title_blogs']="No Update Title !";
    }else{
       $title_blogs = $_POST['title_blogs'];
   }

   if(empty($_POST['sub_title_blogs'])){
       $errors['sub_title_blogs']="No Update Sub Title !";
    }else{
       $sub_title_blogs = $_POST['sub_title_blogs'];
   }

   if(empty($_POST['name_blogger_blogs'])){
      $errors['name_blogger_blogs']="No Update Name !";
   }else{
      $name_blogger_blogs = $_POST['name_blogger_blogs'];
  }

   if(empty( $_POST['datepicker_blogs'])){
      $errors['datepicker_blogs']="No Update Datepicker !";
   }else{
      $datepicker_blogs = $_POST['datepicker_blogs'];
   }

   if(empty($_POST['discraption_blogs'])){
      $errors['discraption_blogs']="No Update Discraption !";
   }else{
      $discraption_blogs = $_POST['discraption_blogs'];
   }

   if(!array_filter($errors)){
      $img_blogs = mysqli_real_escape_string($conn , $_FILES['img_blogs']['name']);
      $title_blogs = mysqli_real_escape_string($conn , $_POST['title_blogs']);
      $sub_title_blogs = mysqli_real_escape_string($conn , $_POST['sub_title_blogs']);
      $name_blogger_blogs = mysqli_real_escape_string($conn , $_POST['name_blogger_blogs']);
      $datepicker_blogs = mysqli_real_escape_string($conn , $_POST['datepicker_blogs']);
      $discraption_blogs = mysqli_real_escape_string($conn , $_POST['discraption_blogs']);

      $sql="UPDATE `blogs` SET `img_blogs`='$img_blogs' ,`title_blogs`='$title_blogs' ,`sub_title_blogs`='$sub_title_blogs' , `name_blogger_blogs`='$name_blogger_blogs' ,`datepicker_blogs`='$datepicker_blogs' ,`discraption_blogs`='$discraption_blogs' WHERE `id_blog`= '$id_blog'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-blogs.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//Social Media about
if(isset($_POST['save_social_about'])){
	
   if(empty($_POST['facebook_about'])){
      $errors['facebook_about']="No Link !";
   }else{
      $facebook_about = $_POST['facebook_about'];
   }

   if(empty($_POST['twitter_about'])){
      $errors['twitter_about']="No Link !";
   }else{
      $twitter_about = $_POST['twitter_about'];
   }

   if(empty($_POST['instagram_about'])){
      $errors['instagram_about']="No Link !";
   }else{
      $instagram_about = $_POST['instagram_about'];
   }

   if(!array_filter($errors)){
      $facebook_about = mysqli_real_escape_string($conn , $_POST['facebook_about']);
      $twitter_about = mysqli_real_escape_string($conn , $_POST['twitter_about']);
      $instagram_about = mysqli_real_escape_string($conn , $_POST['instagram_about']);

      $sql="UPDATE `social_about` SET `facebook_about`='$facebook_about' ,`twitter_about`='$twitter_about' ,`instagram_about`='$instagram_about'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-social-about.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_social_about'])){
   $id_social_about=$_GET['edit_social_about'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `social_about` WHERE `id_social_about`='$id_social_about'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $facebook_about = $row['facebook_about'];
      $twitter_about = $row['twitter_about'];
      $instagram_about = $row['instagram_about'];
   }
}

if(isset($_POST['update_social_about'])){
   $id_social_about=$_POST['id_social_about'];

   if(empty($_POST['facebook_about'])){
      $errors['facebook_about']="No Update Link !";
   }else{
      $facebook_about = $_POST['facebook_about'];
   }

   if(empty($_POST['twitter_about'])){
      $errors['twitter_about']="No Update Link !";
   }else{
      $twitter_about = $_POST['twitter_about'];
   }

   if(empty($_POST['instagram_about'])){
      $errors['instagram_about']="No Update Link !";
   }else{
      $instagram_about = $_POST['instagram_about'];
   }

   $update=true;

   if(!array_filter($errors)){
      $facebook_about = mysqli_real_escape_string($conn , $_POST['facebook_about']);
      $twitter_about = mysqli_real_escape_string($conn , $_POST['twitter_about']);
      $instagram_about = mysqli_real_escape_string($conn , $_POST['instagram_about']);

      $sql="UPDATE `social_about` SET `facebook_about`='$facebook_about' ,`twitter_about`='$twitter_about' ,`instagram_about`='$instagram_about' WHERE `id_social_about`='$id_social_about'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-social-about.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//about
if(isset($_POST['save_abouts'])){
	
   if(empty($_FILES['img_about']['name'])){
        $errors['img_about']="No Selected Image !";
     }else{
        $img_about = $_FILES['img_about']['name'];
        $img_aboutTamp=$_FILES["img_about"]["tmp_name"];
        $folderimg_about ="upload/" . $img_about ;
        move_uploaded_file($img_aboutTamp , $folderimg_about );
   }

   if(empty($_POST['title_about1'])){
       $errors['title_about1']="No Title 1 !";
    }else{
       $title_about1 = $_POST['title_about1'];
   }

   if(empty($_POST['discraption_about1'])){
       $errors['discraption_about1']="No Discraption 1 !";
    }else{
       $discraption_about1 = $_POST['discraption_about1'];
   }

   if(empty($_POST['title_about2'])){
      $errors['title_about2']="No Title 2 !";
    }else{
      $title_about2 = $_POST['title_about2'];
   }

   if(empty($_POST['discraption_about2'])){
      $errors['discraption_about2']="No Discraption 2 !";
    }else{
      $discraption_about2 = $_POST['discraption_about2'];
   }

   if(empty($_POST['title_about3'])){
       $errors['title_about3']="No Title 3 !";
    }else{
       $title_about3 = $_POST['title_about3'];
   }

   if(empty($_POST['discraption_about3'])){
       $errors['discraption_about3']="No Discraption 3 !";
    }else{
       $discraption_about3 = $_POST['discraption_about3'];
   }

   if(empty($_POST['title_about4'])){
      $errors['title_about4']="No Title 4 !";
    }else{
      $title_about4 = $_POST['title_about4'];
   }

   if(empty($_POST['discraption_about4'])){
      $errors['discraption_about4']="No Discraption 4 !";
    }else{
      $discraption_about4 = $_POST['discraption_about4'];
   }

   if(empty($_POST['title_about5'])){
      $errors['title_about5']="No Title 5 !";
    }else{
      $title_about5 = $_POST['title_about5'];
   }

   if(empty($_POST['discraption_about5'])){
       $errors['discraption_about5']="No Discraption 5 !";
    }else{
       $discraption_about5 = $_POST['discraption_about5'];
   }

   if(empty($_POST['title_about6'])){
       $errors['title_about6']="No Title 6 !";
    }else{
       $title_about6 = $_POST['title_about6'];
   }

   if(empty($_POST['discraption_about6'])){
      $errors['discraption_about6']="No Discraption 6 !";
    }else{
      $discraption_about6 = $_POST['discraption_about6'];
   }

   if(empty($_POST['title_about7'])){
      $errors['title_about7']="No Title 7 !";
    }else{
      $title_about7 = $_POST['title_about7'];
   }

   if(empty($_POST['discraption_about7'])){
       $errors['discraption_about7']="No Discraption 7 !";
    }else{
       $discraption_about7 = $_POST['discraption_about7'];
   }

   if(empty($_POST['title_about8'])){
       $errors['title_about8']="No Title 8 !";
    }else{
       $title_about8 = $_POST['title_about8'];
   }

   if(empty($_POST['discraption_about8'])){
      $errors['discraption_about8']="No Discraption 8 !";
    }else{
      $discraption_about8 = $_POST['discraption_about8'];
   }

   if(empty($_POST['title_about9'])){
      $errors['title_about9']="No Title 9 !";
    }else{
      $title_about9 = $_POST['title_about9'];
   }

   if(empty($_POST['discraption_about9'])){
      $errors['discraption_about9']="No Discraption 9 !";
    }else{
      $discraption_about9 = $_POST['discraption_about9'];
   }

   if(!array_filter($errors)){
      $img_about = mysqli_real_escape_string($conn , $_FILES['img_about']['name']);
      $title_about1 = mysqli_real_escape_string($conn , $_POST['title_about1']);
      $discraption_about1 = mysqli_real_escape_string($conn , $_POST['discraption_about1']);
      $title_about2 = mysqli_real_escape_string($conn , $_POST['title_about2']);
      $discraption_about2 = mysqli_real_escape_string($conn , $_POST['discraption_about2']);
      $title_about3 = mysqli_real_escape_string($conn , $_POST['title_about3']);
      $discraption_about3 = mysqli_real_escape_string($conn , $_POST['discraption_about3']);
      $title_about4 = mysqli_real_escape_string($conn , $_POST['title_about4']);
      $discraption_about4 = mysqli_real_escape_string($conn , $_POST['discraption_about4']);
      $title_about5 = mysqli_real_escape_string($conn , $_POST['title_about5']);
      $discraption_about5 = mysqli_real_escape_string($conn , $_POST['discraption_about5']);
      $title_about6 = mysqli_real_escape_string($conn , $_POST['title_about6']);
      $discraption_about6 = mysqli_real_escape_string($conn , $_POST['discraption_about6']);
      $title_about7 = mysqli_real_escape_string($conn , $_POST['title_about7']);
      $discraption_about7 = mysqli_real_escape_string($conn , $_POST['discraption_about7']);
      $title_about8 = mysqli_real_escape_string($conn , $_POST['title_about8']);
      $discraption_about8 = mysqli_real_escape_string($conn , $_POST['discraption_about8']);
      $title_about9 = mysqli_real_escape_string($conn , $_POST['title_about9']);
      $discraption_about9 = mysqli_real_escape_string($conn , $_POST['discraption_about9']);

      $sql="UPDATE `about` SET `img_about`='$img_about' , `title_about1`='$title_about1' ,`discraption_about1`='$discraption_about1' ,`title_about2`='$title_about2' , `discraption_about2`='$discraption_about2' ,`title_about3`='$title_about3' ,`discraption_about3`='$discraption_about3' , `title_about4`='$title_about4' ,`discraption_about4`='$discraption_about4' ,`title_about5`='$title_about5' , `discraption_about5`='$discraption_about5' ,`title_about6`='$title_about6' ,`discraption_about6`='$discraption_about6' , `title_about7`='$title_about7' ,`discraption_about7`='$discraption_about7' ,`title_about8`='$title_about8' , `discraption_about8`='$discraption_about8' ,`title_about9`='$title_about9' ,`discraption_about9`='$discraption_about9'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-about.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_about'])){
   $id_about=$_GET['edit_about'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `about` WHERE `id_about`='$id_about'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_about = $row['img_about'];
      $title_about1 = $row['title_about1'];
      $discraption_about1 = $row['discraption_about1'];
      $title_about2 = $row['title_about2'];
      $discraption_about2 = $row['discraption_about2'];
      $title_about3 = $row['title_about3'];
      $discraption_about3 = $row['discraption_about3'];
      $title_about4 = $row['title_about4'];
      $discraption_about4 = $row['discraption_about4'];
      $title_about5 = $row['title_about5'];
      $discraption_about5 = $row['discraption_about5'];
      $title_about6 = $row['title_about6'];
      $discraption_about6 = $row['discraption_about6'];
      $title_about7 = $row['title_about7'];
      $discraption_about7 = $row['discraption_about7'];
      $title_about8 = $row['title_about8'];
      $discraption_about8 = $row['discraption_about8'];
      $title_about9 = $row['title_about9'];
      $discraption_about9 = $row['discraption_about9'];
   }

   if(empty($_FILES['img_about']['name'])){
       $errors['edit_img_about']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_abouts'])){
   $id_about=$_POST['id_about'];

   $update=true;

   if(empty($_FILES['img_about']['name'])){
      $errors['img_about']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_about = $_FILES['img_about']['name'];
      $img_aboutTamp=$_FILES["img_about"]["tmp_name"];
      $folderimg_about ="upload/" . $img_about ;
      move_uploaded_file($img_aboutTamp , $folderimg_about);
   }

   if(empty($_POST['title_about1'])){
       $errors['title_about1']="No Update Title 1 !";
    }else{
       $title_about1 = $_POST['title_about1'];
   }

   if(empty($_POST['discraption_about1'])){
       $errors['discraption_about1']="No Update Discraption 1 !";
    }else{
       $discraption_about1 = $_POST['discraption_about1'];
   }

   if(empty($_POST['title_about2'])){
      $errors['title_about2']="No Update Title 2 !";
    }else{
      $title_about2 = $_POST['title_about2'];
   }

   if(empty($_POST['discraption_about2'])){
      $errors['discraption_about2']="No Update Discraption 2 !";
    }else{
      $discraption_about2 = $_POST['discraption_about2'];
   }

   if(empty($_POST['title_about3'])){
       $errors['title_about3']="No Title 3 !";
    }else{
       $title_about3 = $_POST['title_about3'];
   }

   if(empty($_POST['discraption_about3'])){
       $errors['discraption_about3']="No Update Discraption 3 !";
    }else{
       $discraption_about3 = $_POST['discraption_about3'];
   }

   if(empty($_POST['title_about4'])){
      $errors['title_about4']="No Update Title 4 !";
    }else{
      $title_about4 = $_POST['title_about4'];
   }

   if(empty($_POST['discraption_about4'])){
      $errors['discraption_about4']="No Update Discraption 4 !";
    }else{
      $discraption_about4 = $_POST['discraption_about4'];
   }

   if(empty($_POST['title_about5'])){
      $errors['title_about5']="No Update Title 5 !";
    }else{
      $title_about5 = $_POST['title_about5'];
   }

   if(empty($_POST['discraption_about5'])){
       $errors['discraption_about5']="No Update Discraption 5 !";
    }else{
       $discraption_about5 = $_POST['discraption_about5'];
   }

   if(empty($_POST['title_about6'])){
       $errors['title_about6']="No Update Title 6 !";
    }else{
       $title_about6 = $_POST['title_about6'];
   }

   if(empty($_POST['discraption_about6'])){
      $errors['discraption_about6']="No Update Discraption 6 !";
    }else{
      $discraption_about6 = $_POST['discraption_about6'];
   }

   if(empty($_POST['title_about7'])){
      $errors['title_about7']="No Update Title 7 !";
    }else{
      $title_about7 = $_POST['title_about7'];
   }

   if(empty($_POST['discraption_about7'])){
       $errors['discraption_about7']="No Update Discraption 7 !";
    }else{
       $discraption_about7 = $_POST['discraption_about7'];
   }

   if(empty($_POST['title_about8'])){
       $errors['title_about8']="No Update Title 8 !";
    }else{
       $title_about8 = $_POST['title_about8'];
   }

   if(empty($_POST['discraption_about8'])){
      $errors['discraption_about8']="No Update Discraption 8 !";
    }else{
      $discraption_about8 = $_POST['discraption_about8'];
   }

   if(empty($_POST['title_about9'])){
      $errors['title_about9']="No Update Title 9 !";
    }else{
      $title_about9 = $_POST['title_about9'];
   }

   if(empty($_POST['discraption_about9'])){
      $errors['discraption_about9']="No Update Discraption 9 !";
    }else{
      $discraption_about9 = $_POST['discraption_about9'];
   }

   if(!array_filter($errors)){
      $img_about = mysqli_real_escape_string($conn , $_FILES['img_about']['name']);
      $title_about1 = mysqli_real_escape_string($conn , $_POST['title_about1']);
      $discraption_about1 = mysqli_real_escape_string($conn , $_POST['discraption_about1']);
      $title_about2 = mysqli_real_escape_string($conn , $_POST['title_about2']);
      $discraption_about2 = mysqli_real_escape_string($conn , $_POST['discraption_about2']);
      $title_about3 = mysqli_real_escape_string($conn , $_POST['title_about3']);
      $discraption_about3 = mysqli_real_escape_string($conn , $_POST['discraption_about3']);
      $title_about4 = mysqli_real_escape_string($conn , $_POST['title_about4']);
      $discraption_about4 = mysqli_real_escape_string($conn , $_POST['discraption_about4']);
      $title_about5 = mysqli_real_escape_string($conn , $_POST['title_about5']);
      $discraption_about5 = mysqli_real_escape_string($conn , $_POST['discraption_about5']);
      $title_about6 = mysqli_real_escape_string($conn , $_POST['title_about6']);
      $discraption_about6 = mysqli_real_escape_string($conn , $_POST['discraption_about6']);
      $title_about7 = mysqli_real_escape_string($conn , $_POST['title_about7']);
      $discraption_about7 = mysqli_real_escape_string($conn , $_POST['discraption_about7']);
      $title_about8 = mysqli_real_escape_string($conn , $_POST['title_about8']);
      $discraption_about8 = mysqli_real_escape_string($conn , $_POST['discraption_about8']);
      $title_about9 = mysqli_real_escape_string($conn , $_POST['title_about9']);
      $discraption_about9 = mysqli_real_escape_string($conn , $_POST['discraption_about9']);

      $sql="UPDATE `about` SET `img_about`='$img_about' , `title_about1`='$title_about1' ,`discraption_about1`='$discraption_about1' ,`title_about2`='$title_about2' , `discraption_about2`='$discraption_about2' ,`title_about3`='$title_about3' ,`discraption_about3`='$discraption_about3' , `title_about4`='$title_about4' ,`discraption_about4`='$discraption_about4' ,`title_about5`='$title_about5' , `discraption_about5`='$discraption_about5' ,`title_about6`='$title_about6' ,`discraption_about6`='$discraption_about6' , `title_about7`='$title_about7' ,`discraption_about7`='$discraption_about7' ,`title_about8`='$title_about8' , `discraption_about8`='$discraption_about8' ,`title_about9`='$title_about9' ,`discraption_about9`='$discraption_about9' WHERE `id_about`='$id_about'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-about.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//grid blog
if(isset($_POST['save_grid'])){
 
   if(empty($_FILES['img_grid']['name'])){
      $errors['img_grid']="No Selected Image !";
   }else{
      $img_grid = $_FILES['img_grid']['name'];
      $img_gridTamp = $_FILES["img_grid"]["tmp_name"];
      $folderimg_grid ="upload/" . $img_grid ;
      move_uploaded_file($img_gridTamp , $folderimg_grid);
   }

   if(empty($_POST['title_grid'])){
      $errors['title_grid']="No Title !";
   }else{
      $title_grid = $_POST['title_grid'];
   }

   if(empty($_POST['sub_title_grid'])){
      $errors['sub_title_grid']="No Sub Title !";
   }else{
      $sub_title_grid = $_POST['sub_title_grid'];
   }

   if(empty($_POST['name_blogger_grid'])){
      $errors['name_blogger_grid']="No Name !";
   }else{
      $name_blogger_grid = $_POST['name_blogger_grid'];
   }

   if(empty($_POST['datepicker_grid'])){
      $errors['datepicker_grid']="No Date !";
   }else{
      $datepicker_grid  = $_POST['datepicker_grid'];
   }

   if(!array_filter($errors)){
      $img_grid = mysqli_real_escape_string($conn , $_FILES['img_grid']['name']); 
      $title_grid = mysqli_real_escape_string($conn , $_POST['title_grid']);
      $sub_title_grid = mysqli_real_escape_string($conn , $_POST['sub_title_grid']);
      $name_blogger_grid = mysqli_real_escape_string($conn , $_POST['name_blogger_grid']);
      $datepicker_grid = mysqli_real_escape_string($conn , $_POST['datepicker_grid']);

      $sql="INSERT INTO `grid`(`img_grid`,`title_grid`,`sub_title_grid`,`name_blogger_grid`,`datepicker_grid`) VALUES('$img_grid','$title_grid','$sub_title_grid','$name_blogger_grid','$datepicker_grid')";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-grid.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_grid'])){
   $id_grid=$_GET['delete_grid'];

   $sql="DELETE FROM `grid` WHERE `id_grid`='$id_grid'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-grid.php';</script>"; 
   exit;
}

if(isset($_GET['edit_grid'])){
   $id_grid=$_GET['edit_grid'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `grid` WHERE `id_grid`='$id_grid'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_grid = $row['img_grid'];
      $title_grid = $row['title_grid'];
      $sub_title_grid = $row['sub_title_grid'];
      $name_blogger_grid = $row['name_blogger_grid'];
      $datepicker_grid = $row['datepicker_grid'];
   }

   if(empty($_FILES['img_grid']['name'])){
      $errors['edit_img_grid']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_grid'])){
   $id_grid=$_POST['id_grid'];

   if(empty($_FILES['img_grid']['name'])){
      $errors['img_grid']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_grid = $_FILES['img_grid']['name'];
      $img_gridTamp = $_FILES["img_grid"]["tmp_name"];
      $folderimg_grid ="upload/" . $img_grid ;
      move_uploaded_file($img_gridTamp , $folderimg_grid);
   }

   if(empty($_POST['title_grid'])){
      $errors['title_grid']="No Update Title !";
   }else{
      $title_grid = $_POST['title_grid'];
   }

   if(empty($_POST['sub_title_grid'])){
      $errors['sub_title_grid']="No Update Sub Title !";
   }else{
      $sub_title_grid = $_POST['sub_title_grid'];
   }

   if(empty($_POST['name_blogger_grid'])){
      $errors['name_blogger_grid']="No Update Name !";
   }else{
      $name_blogger_grid = $_POST['name_blogger_grid'];
   }

   if(empty($_POST['datepicker_grid'])){
      $errors['datepicker_grid']="No Update Date !";
   }else{
      $datepicker_grid = $_POST['datepicker_grid'];
   }

   $update=true;

   if(!array_filter($errors)){
      $img_grid = mysqli_real_escape_string($conn , $_FILES['img_grid']['name']); 
      $title_grid = mysqli_real_escape_string($conn , $_POST['title_grid']);
      $sub_title_grid = mysqli_real_escape_string($conn , $_POST['sub_title_grid']);
      $name_blogger_grid = mysqli_real_escape_string($conn , $_POST['name_blogger_grid']);
      $datepicker_grid = mysqli_real_escape_string($conn , $_POST['datepicker_grid']);
      
      $sql="UPDATE `grid` SET `img_grid`='$img_grid' ,`title_grid`='$title_grid' ,`sub_title_grid`='$sub_title_grid' ,`name_blogger_grid`='$name_blogger_grid' ,`datepicker_grid`='$datepicker_grid'  WHERE `id_grid`= '$id_grid'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-grid.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//inner blog
if(isset($_POST['save_inner'])){

   if(empty($_FILES['img_inners']['name'])){
      $errors['img_inners']="No Selected Image !";
   }else{
      $img_inners =$_FILES['img_inners']['name'];
      $img_innersTamp=$_FILES["img_inners"]["tmp_name"];
      $folderimg_inners ="upload/" . $img_inners ;
      move_uploaded_file($img_innersTamp , $folderimg_inners);
   }

   if(empty($_POST['title_inners'])){
      $errors['title_inners']="No Title !";
   }else{
      $title_inners = $_POST['title_inners'];
   }

   if(empty($_POST['sub_title_inners'])){
      $errors['sub_title_inners']="No Sub Title !";
   }else{
      $sub_title_inners = $_POST['sub_title_inners'];
   }

   if(empty($_POST['name_blogger_inners'])){
      $errors['name_blogger_inners']="No Name !";
   }else{
      $name_blogger_inners = $_POST['name_blogger_inners'];
   }

   if(empty($_POST['datepicker_inners'])){
      $errors['datepicker_inners']="No Date !";
   }else{
      $datepicker_inners = $_POST['datepicker_inners'];
   }

   if(!array_filter($errors)){
      $img_inners = mysqli_real_escape_string($conn , $_FILES['img_inners']['name']);
      $title_inners = mysqli_real_escape_string($conn , $_POST['title_inners']);
      $sub_title_inners = mysqli_real_escape_string($conn , $_POST['sub_title_inners']);
      $name_blogger_inners = mysqli_real_escape_string($conn , $_POST['name_blogger_inners']);
      $datepicker_inners = mysqli_real_escape_string($conn , $_POST['datepicker_inners']);

      $sql="UPDATE `inner` SET `img_inners`='$img_inners' ,`title_inners`='$title_inners' ,`sub_title_inners`='$sub_title_inners' ,`name_blogger_inners`='$name_blogger_inners' ,`datepicker_inners`='$datepicker_inners'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-inner.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_inners'])){
   $id_inners=$_GET['edit_inners'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `inner` WHERE `id_inners`='$id_inners'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_inners = $row['img_inners'];
      $title_inners = $row['title_inners'];
      $sub_title_inners = $row['sub_title_inners'];
      $name_blogger_inners = $row['name_blogger_inners'];
      $datepicker_inners = $row['datepicker_inners'];
   }

   if(empty($_FILES['img_inners']['name'])){
      $errors['edit_img_inners']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_inner'])){
   $id_inners=$_POST['id_inners'];

   if(empty($_FILES['img_inners']['name'])){
      $errors['img_inners']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_inners =$_FILES['img_inners']['name'];
      $img_innersTamp=$_FILES["img_inners"]["tmp_name"];
      $folderimg_inners ="upload/" . $img_inners ;
      move_uploaded_file($img_innersTamp , $folderimg_inners);
   }

   if(empty($_POST['title_inners'])){
      $errors['title_inners']="No Ubdate Title !";
   }else{
      $title_inners = $_POST['title_inners'];
   }

   if(empty($_POST['sub_title_inners'])){
      $errors['sub_title_inners']="No Update Sub Title !";
   }else{
      $sub_title_inners = $_POST['sub_title_inners'];
   }

   if(empty($_POST['name_blogger_inners'])){
      $errors['name_blogger_inners']="No Update Name !";
   }else{
      $name_blogger_inners = $_POST['name_blogger_inners'];
   }

   if(empty($_POST['datepicker_inners'])){
      $errors['datepicker_inners']="No Update Date !";
   }else{
      $datepicker_inners = $_POST['datepicker_inners'];
   }

   $update=true;

   if(!array_filter($errors)){
      $img_inners = mysqli_real_escape_string($conn , $_FILES['img_inners']['name']);
      $title_inners = mysqli_real_escape_string($conn , $_POST['title_inners']);
      $sub_title_inners = mysqli_real_escape_string($conn , $_POST['sub_title_inners']);
      $name_blogger_inners = mysqli_real_escape_string($conn , $_POST['name_blogger_inners']);
      $datepicker_inners = mysqli_real_escape_string($conn , $_POST['datepicker_inners']);

      $sql="UPDATE `inner` SET `img_inners`='$img_inners' ,`title_inners`='$title_inners' ,`sub_title_inners`='$sub_title_inners' ,`name_blogger_inners`='$name_blogger_inners' ,`datepicker_inners`='$datepicker_inners' WHERE `id_inners`='$id_inners'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-inner.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
    } 
}

//comment inner
if(isset($_GET['delete_comment'])){
   $id_comment = $_GET['delete_comment'];

   $sql="DELETE FROM `comments` WHERE `id`='$id_comment'";

   if(mysqli_query($conn, $sql)){

      $sql_delete_sub = "DELETE FROM `sub_comments` WHERE `parent_id`='$id_comment'";

      if(mysqli_query($conn , $sql_delete_sub)){

      }else{
         echo 'Query error:' . mysqli_error($conn);
      }

   } else {
      echo 'Query error:' . mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-comments.php';</script>"; 
   exit;
}

if(isset($_GET['delete_sub_comment'])){
   $id_subcomment = $_GET['delete_sub_comment'];

   $sql = "DELETE FROM `sub_comments` WHERE `id`='$id_subcomment'";

   if(mysqli_query($conn , $sql)){

   }else{
      echo "Error Query" . mysqli_error($conn);
   }

   echo "<script type='text/javascript'>window.top.location='view_sub_comment.php';</script>"; 
   exit;
}

//contact
if(isset($_POST['save_contact'])){
	
   if(empty($_POST['phone_contact'])){
      $errors['phone_contact']="No Phone Number !";
   }else{
      $phone_contact = $_POST['phone_contact'];
      if(!preg_match('/^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/', $phone_contact)){
         $errors['phone_contact'] = 'Phone Number valid !';
      }
   }

   if(empty($_POST['email_contact'])){
      $errors['email_contact']="No Email !";
   }else{
      $email_contact = $_POST['email_contact'];
      if(!preg_match('/^([A-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/', $email_contact)){
         $errors['email_contact'] = 'Email valid !';
      }
   }

   if(empty($_POST['address_contact'])){
      $errors['address_contact']="No Address !";
   }else{
      $address_contact = $_POST['address_contact'];
   }

   if(!array_filter($errors)){
      $phone_contact = mysqli_real_escape_string($conn , $_POST['phone_contact']);
      $email_contact = mysqli_real_escape_string($conn , $_POST['email_contact']);
      $address_contact = mysqli_real_escape_string($conn , $_POST['address_contact']);

      $sql="UPDATE `contact` SET `phone_contact`='$phone_contact' , `email_contact`='$email_contact' ,`address_contact`='$address_contact'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-contact.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_contact'])){
   $id_contact=$_GET['edit_contact'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `contact` WHERE `id_contact`='$id_contact'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $phone_contact = $row['phone_contact'];
      $email_contact = $row['email_contact'];
      $address_contact = $row['address_contact'];
   }
}

if(isset($_POST['update_contact'])){
   $id_contact=$_POST['id_contact'];

   if(empty($_POST['phone_contact'])){
      $errors['phone_contact']="No Update Phone Number !";
   }else{
      $phone_contact = $_POST['phone_contact'];
      if(!preg_match('/^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/', $phone_contact)){
         $errors['phone_contact'] = 'Phone Number valid !';
      }
   }

   if(empty($_POST['email_contact'])){
      $errors['email_contact']="No Update Email !";
   }else{
      $email_contact = $_POST['email_contact'];
      if(!preg_match('/^([A-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/', $email_contact)){
         $errors['email_contact'] = 'Email valid !';
      }
   }

   if(empty($_POST['address_contact'])){
      $errors['address_contact']="No Update Address !";
   }else{
      $address_contact = $_POST['address_contact'];
   }

   $update=true;

   if(!array_filter($errors)){
      $phone_contact = mysqli_real_escape_string($conn , $_POST['phone_contact']);
      $email_contact = mysqli_real_escape_string($conn , $_POST['email_contact']);
      $address_contact = mysqli_real_escape_string($conn , $_POST['address_contact']);

      $sql="UPDATE `contact` SET `phone_contact`='$phone_contact' , `email_contact`='$email_contact' ,`address_contact`='$address_contact' WHERE `id_contact`='$id_contact'";

      if(mysqli_query($conn , $sql)){
            echo "<script type='text/javascript'>window.top.location='View-contact.php';</script>"; 
            exit;
      }else{
            echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//form us
if(isset($_GET['delete_form_us'])){
   $id_form_us=$_GET['delete_form_us'];

   $sql="DELETE FROM `form_us` WHERE `id_form_us`='$id_form_us'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-send-us.php';</script>"; 
   exit;
}
?>