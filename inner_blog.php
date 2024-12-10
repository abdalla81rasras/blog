<?php 
include "./includes/header.php";
include "./Dashboard/inc/connection.php";
include "./includes/comments_fun.php";

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
              <li class="nav-item active">
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

    <?php 
      if(isset($_GET['comment'])=="success_comment"):
    ?>
      <div id="notification" class="notification d-hidden">
        Added comment successfully !
        <span class="close-btn" onclick="closeNotification()">×</span>
      </div>
    <?php 
      elseif(isset($_GET['sub_comment'])=="success_subcomment"):
    ?>
      <div id="notification" class="notification d-hidden">
        Added comment reply successfully !
        <span class="close-btn" onclick="closeNotification()">×</span>
      </div>
    <?php 
      endif;
    ?>

    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Post Details</h4>
                <h2>Single blog post</h2>
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
                <?php
                  $query="SELECT * FROM `inner`";
                  $result=mysqli_query($conn , $query);
                  while($row=mysqli_fetch_assoc($result)) : 
                ?>
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <img src="Dashboard/upload/<?php echo $row['img_inners']; ?>" alt="img-inner"> 
                      </div>
                      <div class="down-content">
                        <span><?php echo $row['title_inners']; ?></span> 
                        <a href="inner_blog.php"><h4><?php echo $row['sub_title_inners']; ?></h4></a> 
                        <ul class="post-info">
                          <li><a href="#"><?php echo $row['name_blogger_inners']; ?></a></li> 
                          <li><a href="#"><?php echo $row['datepicker_inners']; ?></a></li> 
                          <li><a href="#"><?php echo $row['comments_inners']; ?> Comments</a></li> 
                        </ul>
                        <p>You can browse different tags such as multi-page, resume, video, etc. to see more CSS templates. Sed hendrerit rutrum arcu, non malesuada nisi. Sed id facilisis turpis. Donec justo elit, dapibus vel ultricies in, molestie sit amet risus. In nunc augue, rhoncus sed libero et, tincidunt tempor nisl. Donec egestas, quam eu rutrum ultrices, sapien ante posuere nisl, ac eleifend eros orci vel ante. Pellentesque vitae eleifend velit. Etiam blandit felis sollicitudin vestibulum feugiat.
                        <br><br>Donec tincidunt leo nec magna gravida varius. Suspendisse felis orci, egestas ac sodales quis, venenatis et neque. Vivamus facilisis dignissim arcu et blandit. Maecenas finibus dui non pulvinar lacinia. Ut lacinia finibus lorem vel porttitor. Suspendisse et metus nec libero ultrices varius eget in risus. Cras id nibh at erat pulvinar malesuada et non ipsum. Suspendisse id ipsum leo.</p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Best Templates</a>,</li>
                                <li><a href="#">TemplateMo</a></li>
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

                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>Comments</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php 
                            $query="SELECT * FROM `comments`";
                            $result3=mysqli_query($conn , $query);
                            if(mysqli_num_rows($result3) > 0){
                              while($row=mysqli_fetch_assoc($result3)):
                        ?>                  
                          <li>
                            <div class="right-content">
                              <h4><?php echo $row['Name_of_Comment']; ?><span><?php $date=date_create($row['created_at']); echo date_format($date,"D m,Y"); ?></span></h4>
                              <p><?php echo $row['comment']; ?></p> <br>
                               <small class='reply' data-target=".sc<?php echo $row['id']; ?>"><a href="javascript::void()"><b>Reply</b></a></small>
                            </div>
                          </li>
                          <?php
                                $comment_id = $row['id'];
                                $sql_sub = "SELECT * FROM `sub_comments` WHERE `parent_id`='$comment_id'";
                                $result4 = mysqli_query($conn,$sql_sub);

                                if(mysqli_num_rows($result4) > 0):
                                  while($row_sub=mysqli_fetch_assoc($result4)){
                          ?>
                                  <li class="replied">
                                    <div class="right-content">
                                      <h4><?php echo $row_sub['Name_of_Sub_Comment'] ?><span><?php $date_sub=date_create($row_sub['created_at']); echo date_format($date_sub,"D m,Y"); ?></span></h4>
                                      <p><?php echo $row_sub['sub_comment'] ?></p>
                                    </div>
                                  </li>
                          <?php
                                  }
                                endif;     
                          ?>
                                <div class="submit-comment mb-5 mt-3 sc<?php echo $comment_id ?>" style='display:none;'>
                                  <div class="content">
                                    <form id="comment" action="" method="post">
                                      <input type="hidden" name="id_comment_to_sub" value="<?php echo $comment_id ?>">
                                      <div class="row justify-content-center">
                                        <div class="col-md-8 col-sm-8">
                                          <fieldset class="mb-2">
                                            <input name="Name_of_Sub_Comment" class="mb-1" type="text" id="name" placeholder="Your name" required="">
                                          </fieldset>
                                        </div>
                                      </div>
                                      <div class="row justify-content-center">
                                        <div class="col-md-8 col-sm-8">
                                          <fieldset>
                                            <textarea name="sub_comment" rows="3" class="mb-1" id="message" placeholder="Type your sub comment" required=""></textarea>
                                          </fieldset>
                                        </div>
                                      </div>
                                      <div class="row justify-content-center">
                                        <div class="col-md-8 col-sm-8">
                                          <fieldset>
                                            <button type="submit" id="form-submit" name="submit_sub" class="main-button">Submit</button>
                                          </fieldset>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                        <?php 
                              endwhile; 
                            }else{
                              echo "<h5>No comments yet.</h5>";
                            }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset class="mb-2">
                              <input name="Name_of_Comment" class="mb-1" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset class="mb-2">
                              <input name="email_comment_inner" class="mb-1" type="email" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset class="mb-2">
                              <input name="subject" type="text" class="mb-1" id="subject" placeholder="Subject" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="Comment" rows="6" class="mb-1" id="message" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" name="submit" class="main-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
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

<?php include "./includes/footer.php"; ?>