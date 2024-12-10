<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/customs.css">
    <link rel="stylesheet" href="./vendor/bootstrap/dist/css/file.min.css">

    <!-- Daterange picker -->
    <link href="./vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="./vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="./vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="./vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.date.css">
</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img class="logo-abbr mb-2" src="./images/Website Logo.png" alt="">
                <h3 class="logo-compact mt-1">CleverMind</h3>
                <h3 class="brand-title mt-1">CleverMind</h3>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" onclick="return ToSearch();" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <div>
                                        <input class="form-control" id="search" type="search" placeholder="Search" aria-label="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <?php 
                                            $query="SELECT `Name_of_Comment` FROM `comments`";
                                            $result=mysqli_query($conn , $query);
                                            while($row=mysqli_fetch_assoc($result)):
                                        ?>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="fa fa-comment"></i></span>
                                            <div class="media-body">
                                                <a href="View-comments.php">
                                                    <p><strong>Comment :</strong> <?php echo $row['Name_of_Comment']; ?>
                                                    </p>
                                                </a>
                                            </div>
                                        </li>
                                        <?php endwhile;?>
                                        <?php 
                                            $query="SELECT `name_form_us` FROM `form_us`";
                                            $result=mysqli_query($conn , $query);
                                            while($row=mysqli_fetch_assoc($result)):
                                        ?>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="fa fa-wechat"></i></span>
                                            <div class="media-body">
                                                <a href="View-send-us.php">
                                                    <p><strong>Message :</strong> <?php echo $row['name_form_us']; ?></p>
                                                </a>
                                            </div>
                                        </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void()" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Header & Footer</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="mdi mdi-page-layout-header"></i><span class="nav-text">Header</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-header.php">Add New</a></li>
                            <li><a href="View-header.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="mdi mdi-page-layout-footer"></i><span class="nav-text">Footer</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-footer.php">Add New</a></li>
                            <li><a href="View-footer.php">View All</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Home Page</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-sliders"></i><span class="nav-text">Slide Bar</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-slidebar.php">Add New</a></li>
                            <li><a href="View-slidebar.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="mdi mdi-blogger"></i><span class="nav-text">Blogs</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-blogs.php">Add New</a></li>
                            <li><a href="View-blogs.php">View All</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">About As</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-users"></i><span class="nav-text">About</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-abouts.php">Add New</a></li>
                            <li><a href="View-about.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-hashtag"></i><span class="nav-text">Acountes Social About</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-social-about.php">Add New</a></li>
                            <li><a href="View-social-about.php">View All</a></li>
                        </ul>
                    </li>                    
                    <li class="nav-label">Grid Blog</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="mdi mdi-grid"></i><span class="nav-text">Grid Blog</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-grid.php">Add New</a></li>
                            <li><a href="View-grid.php">View All</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Inner Blog</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="mdi mdi-square-inc"></i>
                        <span class="nav-text">Inner Blog</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-inner.php">Add New</a></li>
                            <li><a href="View-inner.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-comments"></i>
                        <span class="nav-text">Comments</span></a>
                        <ul aria-expanded="false">
                            <li><a href="View-comments.php">View All Comments</a></li>
                            <li><a href="view_sub_comment.php">View All Replies Comments</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Contact Us</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="fa fa-phone"></i><span class="nav-text">Contact</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-contact.php">Add New</a></li>
                            <li><a href="View-contact.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="fa fa-share-square-o"></i><span class="nav-text">Send Us Form</span></a>
                        <ul aria-expanded="false">
                            <li><a href="View-send-us.php">View All</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
