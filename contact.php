<?php 
include "./includes/header.php";
include "./Dashboard/inc/connection.php";

if(isset($_POST['submit_form_us'])){

  $name_form_us = mysqli_real_escape_string($conn , $_POST['name_form_us']);
  $email_form_us = mysqli_real_escape_string($conn , $_POST['email_form_us']);
  $subject_form_us = mysqli_real_escape_string($conn , $_POST['subject_form_us']);
  $message_form_us = mysqli_real_escape_string($conn , $_POST['message_form_us']);

  $sql="INSERT INTO `form_us`(`name_form_us`,`email_form_us`,`subject_form_us`,`message_form_us`) VALUES('$name_form_us','$email_form_us','$subject_form_us','$message_form_us')";

  if(mysqli_query($conn , $sql)){

  }else{
    echo 'query error !' . mysqli_error($conn);
  }

  echo "<script type='text/javascript'>alert('Send Successfully');
  window.location='contact.php';</script>"; 
    
}
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
              <li class="nav-item">
                <a class="nav-link" href="grid_blog.php">Grid Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inner_blog.php">Inner Blog</a>
              </li>
              <li class="nav-item active">
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
                <h4>contact us</h4>
                <h2>let’s stay in touch!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <section class="contact-us">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Send us a message</h2>
                    </div>
                    <div class="content">
                      <form id="contact" action="contact.php" method="POST">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset class="mb-2">
                              <input name="name_form_us" class="mb-1" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset class="mb-2">
                              <input name="email_form_us" class="mb-1" type="email" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset class="mb-2">
                              <input name="subject_form_us" class="mb-1" type="text" id="subject" placeholder="Subject" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message_form_us" class="mb-1" rows="6" id="message" placeholder="Your Message" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" name="submit_form_us" id="form-submit" class="main-button">Send Message</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>contact information</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php 
                          $query="SELECT * FROM `contact`";
                          $result=mysqli_query($conn , $query);
                          while($row=mysqli_fetch_assoc($result)):
                        ?>
                        <li>
                          <h5><?php echo $row['phone_contact'] ?></h5> 
                          <span>PHONE NUMBER</span>
                        </li>
                        <li>
                          <h5><?php echo $row['email_contact'] ?></h5> 
                          <span>EMAIL ADDRESS</span>
                        </li>
                        <li>
                          <h5><?php echo $row['address_contact'] ?></h5>  
                          <span>STREET ADDRESS</span>
                        </li>
                        <?php endwhile; ?>  
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12">
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Amman+KHBP+-,+Jordan&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          
        </div>
      </div>
    </section>

<?php include "./includes/footer.php" ?>