<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="At Exclusive UX Designs,
we create digital solutions that makes it easy to realize the essence of your business within a little time.">
    <title>Fox Chase Condominium Association</title>
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
          <div class="form-reason">
            <label>Message:</label>
            <textarea name="message"></textarea>
          </div>
          <input type="submit" name="send" value="Send Message">
        </form>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
