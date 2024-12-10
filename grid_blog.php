<?php 
include "./includes/header.php";
include "./Dashboard/inc/connection.php";

$query="SELECT * FROM `grid`";
$result=mysqli_query($conn , $query);

?>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item active">
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

    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <?php while($row=mysqli_fetch_assoc($result)): ?>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="Dashboard/upload/<?php echo $row['img_grid']; ?>" alt="img-grid">
                    </div>
                    <div class="down-content">
                      <span><?php echo $row['title_grid']; ?></span>
                      <a href="inner_blog.php"><h4><?php echo $row['sub_title_grid']; ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $row['name_blogger_grid']; ?></a></li>
                        <li><a href="#"><?php echo $row['datepicker_grid']; ?></a></li>
                        <li><a href="#"><?php echo $row['num_comments_grid']; ?> Comments</a></li>
                      </ul>
                      <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endwhile ?>
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