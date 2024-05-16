<div id ="footer">
 <div class="pages">
      <h3>Pages</h3>
      <a href="aboutus.php">About</a>&ensp;|&ensp;
      <!--<a href="service.html">service</a>|-->
      <!--<a href="blog.html">Blogs</a>|-->
      <a href="admin/index.php">Login</a>
      
   </div> 
   <div class="doc">
      <h3>Documents</h3>
      <a href="privacy.php">Privacy Policy</a>&ensp;|&ensp;
      <a href="terms.php">Terms of Use</a>
    </div>
    <div class="social">
       <h3>Follow us</h3>
       <a href="https://www.facebook.com/" target="_black"><i class="fa fa-facebook" aria-hidden="true"></i></a>&ensp;
       <a href="https://www.linkedin.com/in/utkarsh-shukla-33a077218/ " target="_black"><i class="fa fa-linkedin"
             aria-hidden="true"></i></a>&ensp;
       <a href=" https://www.instagram.com/" target="_black"><i class="fa fa-instagram" aria-hidden="true"></i></a>&ensp;
       <a href="https://twitter.com/Utkarsh17166192/ " target="_black"><i class="fa fa-twitter"
             aria-hidden="true"></i></a>

    </div>
    <div class="contact">
       <h3>Contact us</h3>
       <!--<a href="https://api.WhatsApp.com/send?phone:+919415190479" target="_black"><i class="fa fa-whatsapp"-->
       <!--      aria-hidden="true"></i>-->
       </a>&ensp;
       <!--<a href="tel: +919415190479"><i class="fa fa-phone" aria-hidden="true"></i>-->
       </a>&ensp;
       <a href="mailto: shuklautkarsh742@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
       </a>&ensp;
       <a href="https://goo.gl/maps/v7J8N95au433NjJc9"><i class="fa fa-map" aria-hidden="true"></i>
       </a>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php
                include "config.php";

                $sql = "SELECT * FROM settings";

                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)) {
              ?>
                <span><?php echo $row['footerdesc']; ?></span>
              <?php
                }
              }
              ?>
            </div>
            <br><br><br>
            
        </div>
    </div>
</div>
</body>
</html>
