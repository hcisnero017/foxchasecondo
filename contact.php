<?php

  require_once 'controllers/authController.php';

  define('SITE_KEY', '6Lf4-7gUAAAAAKAY6xs8qNZHicOiZjixq6ZTaQ4s');
  define('SECRET_KEY', '6Lf4-7gUAAAAAO3QD0kbZhzKFHXRwTGgy9QxZNQs');
  if($_POST){
      function getCaptcha($SecretKey){
          $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
          $Return = json_decode($Response);
          return $Return;
      }
      $Return = getCaptcha($_POST['g-recaptcha-response']);
      //var_dump($Return);
      if($Return->success == true && $Return->score > 0.5){
          echo "Success!";
      }else{
          echo "You are a Robot!!";
      }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Welcome to Fox Chase Condominium Association">
    <title>Contact | Fox Chase Condominium Association</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="font/flaticon.css">
    <link rel="icon" href="favicon.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script>
    <script type="text/javascript" src="js/show-nav.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="contact">
      <div class="contact-content container">
        <div class="section-title">
          <h3>Contact Us</h3>
          <p>Please contact us for any suggestions you may have!</p>
        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14371.066379257423!2d-80.3350835!3d25.7782719!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89fc23488e10dfa9!2sFox+Chase+Condominium!5e0!3m2!1sen!2sus!4v1557878828379!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contact-info">
          <div class="contact-info-content">
            <div class="info-box">
              <i class="flaticon-manager-avatar"></i>
              <span>Jose Romero</span>
              <p>Manager</p>
            </div>
            <div class="info-box">
              <i class="flaticon-telephone"></i>
              <span>305.264.3644</span>
              <p>Office Number</p>
            </div>
            <div class="info-box">
              <i class="flaticon-message"></i>
              <span>manager@foxchasecondoassociation.com</span>
              <p>Email Address</p>
            </div>
          </div>
        </div>
        <form class="" action="send.php" method="post">
          <div class="form-name">
            <label>Full Name:</label>
            <input type="text" name="full-name" value="" placeholder="John Doe">
          </div>
          <div class="phone-email">
            <div>
              <label>Phone Number:</label>
              <input type="text" name="phone" value="" placeholder="(000) 000-0000" maxlength="10">
            </div>
            <div>
              <label>Email Address:</label>
              <input type="email" name="email" value="" placeholder="johndoe@example.com">
            </div>
          </div>
          <div class="form-reason">
            <label>Why are you contacting us?</label>
            <input type="text" name="reason" value="" placeholder="Tell us your reason...">
          </div>
          <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
          <div class="form-reason">
            <label>Message:</label>
            <textarea name="message"></textarea>
          </div>
          <input type="submit" name="send" value="Send Message">
        </form>
      </div>
    </div>
    <?php include 'footer.php'; ?>

    <script>
      grecaptcha.ready(function() {
      grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
      .then(function(token) {
          //console.log(token);
          document.getElementById('g-recaptcha-response').value=token;
      });
      });
    </script>

  </body>
</html>
