<?php
  require_once 'controllers/authController.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Welcome to Fox Chase Condominium Association">
    <title>Login | Fox Chase Condominium Association</title>
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
    <div class="login">
      <div class="login-content container">
        <form method="post" action="login.php" id="login_form">

          <img src="images/logo.png" alt="Fox Chase Logo">
          <h1>Please enter your credentials to be able to check all documents and events of our association.</h1>

          <?php if(count($errors) > 0): ?>
            <div class="alert-danger">
              <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <label for="username">Username or email:</label>
          <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
          <label for="password">Password:</label>
          <input type="password" name="password" placeholder="Password">
          <div class="form-footer">
            <input type="submit" name="login-btn" value="Login">
            <div class="sign-up">
              <p>Don't have an account? <a href="sign-up.php">Register here</a> </p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
