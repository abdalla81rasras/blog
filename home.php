<?php 
include "./includes/header.php";
include "Dashboard/inc/connection.php";

?>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="grid_blog.php">Grid Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inner_blog.php">Inner Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <?php 
            $query="SELECT * FROM `slide_bar`";
            $result=mysqli_query($conn , $query);
            while($row=mysqli_fetch_assoc($result)):
          ?>
          <div class="item">
            <img src="Dashboard/upload/<?php echo $row['img_slidebar']; ?>" alt="img-slidebar">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?php echo $row['title_slidebar']; ?></span>
                </div>
                <a href="inner_blog.php"><h4><?php echo $row['sub_title_slidebar']; ?></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?php echo $row['name_blogger_slidebar']; ?></a></li>
                  <li><a href="#"><?php echo $row['datepicker_slidebar']; ?></a></li>
                  <li><a href="#"><?php echo $row['num_comments_slidebar']; ?> Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <?php 
                  $query="SELECT * FROM `blogs`";
                  $result=mysqli_query($conn , $query);
                  while($row=mysqli_fetch_assoc($result)):
                ?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="Dashboard/upload/<?php echo $row['img_blogs']; ?>" alt="img-blog">
                    </div>
                    <div class="down-content">
                      <span><?php echo $row['title_blogs']; ?></span>
                      <a href="inner_blog.php"><h4><?php echo $row['sub_title_blogs']; ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $row['name_blogger_blogs']; ?></a></li>
                        <li><a href="#"><?php echo $row['datepicker_blogs']; ?></a></li>
                        <li><a href="#"><?php echo $row['num_comments_blog']; ?> Comments</a></li>
                      </ul>
                      <p><?php echo $row['discraption_blogs']; ?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Beauty</a>,</li>
                              <li><a href="#">Nature</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include "./includes/footer.php" ?>