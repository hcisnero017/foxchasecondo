<?php
  session_start();

  require 'config/db.php';

  $errors = array();
  $username = "";
  $email = "";

  if (isset($_POST['signup-btn'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    $building = $_POST['building'];
    $apt = $_POST['apt'];

    if(empty($name)) {
      $errors['name'] = "Tenant full name is required";
    }
    if(empty($username)) {
      $errors['username'] = "Username is required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Email address is invalid. Please enter a valid email address";
    }
    if(empty($email)) {
      $errors['email'] = "Email is required";
    }
    if(empty($password)) {
      $errors['password'] = "Password is required";
    }
    if(empty($apt)) {
      $errors['apt'] = "Apartment # is required";
    }
    if ($password !== $password2) {
      $errors['password'] = "The passwords do not match. Please try again!";
    }

    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;

    if ($userCount > 0) {
      $errors['email'] = "This email address already exists.";
    }

    if (count($errors) === 0) {
      $password = password_hash($password, PASSWORD_DEFAULT);
      $token = bin2hex(random_bytes(50));
      $verified = false;

      $sql = "INSERT INTO users (name, username, password, verified, email, building, apt, token) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('sssbssss', $name, $username, $password, $verified, $email, $building, $apt, $token);

      if ($stmt->execute()) {
        $user_id = $conn->$insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['verified'] = $verified;
        $_SESSION['message'] = "You are logged in.";
        $_SESSION['alert-class'] = "alert-success";
        header('location: user-confirmation.php');
        exit();
      } else {
        $errors ['db_error'] = "Database error: Failed to register";
      }
    }
  }


  // login form
  if (isset($_POST['login-btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
      $errors['username'] = "Username is required";
    }
    if (empty($password)) {
      $errors['password'] = "Password is required";
    }

    if (count($errors) === 0) {
      $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $username, $username);
      $stmt->execute();
      $result = $stmt->get_result();
      $user = $result->fetch_assoc();

      if (password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['verified'] = $user['verified'];

        $_SESSION['message'] = "You are now logged in.";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();
      } else{
        $errors['login-fail'] = "Wrong creditials. Please try again!";
      }
    }
  }

  // logout

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    header('location: login.php');
    exit();
  }
 ?>
