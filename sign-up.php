<?php
  require_once 'controllers/authController.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Welcome to Fox Chase Condominium Association">
    <title>User Registration | Fox Chase Condominium Association</title>
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
    <div class="registration">
      <div class="registration-content container">
        <form class="" action="sign-up.php" method="post">

          <h1>Create your account to get access to all legal documents, upcoming events and more of our association.</h1>

        <?php if(count($errors) > 0): ?>
          <div class="alert-danger">
            <?php foreach ($errors as $error): ?>
              <li><?php echo $error; ?></li>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

          <label>* Full Name:</label>
          <input type="text" name="name" value="">
          <label for="username">* Username:</label>
          <input type="text" name="username" value="<?php echo $username; ?>">
          <div class="password">
            <div class="pass1">
              <label>* Password:</label>
              <input type="password" name="password" value="">
            </div>
            <div class="pass2">
              <label>* Confirm Password:</label>
              <input type="password" name="password2" value="">
            </div>
          </div>
          <label for="email">* Email Address:</label>
          <input type="email" name="email" value="<?php echo $email; ?>">
          <div class="bld-apt">
            <div class="building">
              <label>* Building #:</label>
              <select class="" name="building">
                <option>8615</option>
                <option>8625</option>
                <option>8635</option>
              </select>
            </div>
            <div class="building">
              <label>* Apt #:</label>
              <input type="text" name="apt" value="">
            </div>
          </div>
          <p>All field mark (*) are required</p>
          <input type="submit" name="signup-btn" value="Register">
        </form>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
