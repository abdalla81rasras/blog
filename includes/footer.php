<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons"> <!-- edit -->
              <?php 
                include "Dashboard/inc/connection.php";
                $query="SELECT * FROM `footer`";
                $result=mysqli_query($conn , $query);
                $row=mysqli_fetch_array($result);
              ?>
              <li><a target="_blank" href="<?php echo $row['facebook_footer'] ?>">Facebook</a></li>
              <li><a target="_blank" href="<?php echo $row['twitter_footer'] ?>">Twitter</a></li>
              <li><a target="_blank" href="<?php echo $row['instagram_footer'] ?>">Instagram</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright2021.Clever Mind POB ICT</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/mesgae.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

<script>
$(document).ready(function() {
    $(".reply").on('click', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $(target).toggle("");
    });
});
</script>
    
  </body>
</html>