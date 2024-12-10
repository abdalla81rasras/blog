<?php 
include "./includes/header.php";
include "./Dashboard/inc/connection.php";

?>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
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

    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>more about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <section class="about-us">
      <div class="container">
      	<?php 
          $query="SELECT * FROM `about`";
          $result=mysqli_query($conn , $query);
          while($row=mysqli_fetch_array($result)):
        ?>
        <div class="row">
          <div class="col-lg-12">
            <img src="Dashboard/upload/<?php echo $row['img_about']; ?>" alt="img-about"> 
            <p>Please tell your friends about TemplateMo website. Thank you. You can browse through different categories of templates such as business, portfolio, restaurant, etc. Pellentesque quis luctus libero. Maecenas pretium molestie erat, ac tincidunt leo gravida ac. Cras ullamcorper eu ipsum eu sollicitudin. Fusce vitae commodo turpis. Integer ullamcorper purus nec justo mollis fermentum. Nunc imperdiet erat nec lacinia laoreet. <br><br>Maecenas faucibus ullamcorper felis vitae finibus. Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
          </div>
        </div>
        
        <div class="row"> 
          <div class="col-lg-6"> 
            <h4><?php echo $row['title_about1']; ?></h4>
          	<p><?php echo $row['discraption_about1']; ?></p>
          </div>
          <div class="col-lg-6">
            <h4><?php echo $row['title_about2']; ?></h4>
          	<p><?php echo $row['discraption_about2']; ?></p>
          </div>
        </div>
        
        <div class="row"> 
          <div class="col-lg-4 col-md-6">
            <h4><?php echo $row['title_about3']; ?></h4>
          	<p><?php echo $row['discraption_about3']; ?></p>
          </div>
          <div class="col-lg-4 col-md-6">
            <h4><?php echo $row['title_about4']; ?></h4>
          	<p><?php echo $row['discraption_about4']; ?></p>
          </div>
          <div class="col-lg-4">
            <h4><?php echo $row['title_about5']; ?></h4>
          	<p><?php echo $row['discraption_about5']; ?></p>
          </div>
        </div>
        
        <div class="row"> 
          <div class="col-lg-3 col-md-6">
            <h4><?php echo $row['title_about6']; ?></h4>
          	<p><?php echo $row['discraption_about6']; ?></p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4><?php echo $row['title_about7']; ?></h4>
          	<p><?php echo $row['discraption_about7']; ?></p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4><?php echo $row['title_about8']; ?></h4>
          	<p><?php echo $row['discraption_about8']; ?></p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4><?php echo $row['title_about9']; ?></h4>
          	<p><?php echo $row['discraption_about9']; ?></p>
          </div>
        </div>
        <?php endwhile; ?>

        <div class="row"> 
          <div class="col-lg-12">
            <ul class="social-icons">
              <?php 
                $query2="SELECT * FROM `social_about`";
                $result=mysqli_query($conn , $query2);
                while($row=mysqli_fetch_array($result)):
              ?>
              <li><a href="<?php echo $row['facebook_about'] ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo $row['twitter_about'] ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo $row['instagram_about'] ?>"><i class="fa fa-instagram"></i></a></li>
              <?php endwhile; ?>   
            </ul>
          </div>
        </div>
        
      </div>
    </section>

<?php include "./includes/footer.php" ?>