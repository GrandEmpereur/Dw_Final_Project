<!DOCTYPE html>
<html lang="en">
    <?php 
      include('./php/link.php');
    ?>
  <body>
    
    <?php 
      include('./php/header.php');
    ?>

<!-- ########################### Main ########################### -->

    <section class="section contact" id="contact">
        <div class="title">
          <h1>Contact me</h1>
        </div>
  
        <div class="contact-center container">
          <div class="left">
            <div>
              <span class="icon"><i class="fas fa-user"></i></span>
              <span class="content">
                <h3>My Name</h3>
                <span>Monkey D. Luffy</span>
              </span>
            </div>
  
            <div>
              <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
              <span class="content">
                <h3>My Address</h3>
                <span>Read Line</span>
              </span>
            </div>
  
            <div>
              <span class="icon"><i class="fas fa-envelope"></i></span>
              <span class="content">
                <h3>My Email</h3>
                <span>MonkeyD.Luffy@gmail.com</span>
              </span>
            </div>
          </div>
          <div class="right">
            <div class="contact-form">
              <h2>Contact Us</h2>
              <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">
              </form>
              <?php include('./php/db_SendContacte.php'); ?>
            </div>
          </div>
        </div>
    </section>


<!-- ########################### footer ########################### -->
    <?php 
      include('./php/footer.php');
    ?>

<!-- ########################### Script ########################### -->

    <script src="./js/script.js"></script>
    
  </body>
</html>

