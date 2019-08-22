<?php
  require_once 'controllers/authController.php';
?>

<header>
  <div class="header-bar">
    <div class="header-bar-content container">
      <div class="profile-info">
        <p>
          <?php
            if($_SESSION['id']==true){
              echo "Welcome, "."<strong>".$_SESSION['email']."</strong>";
              echo '<a href="index.php?logout=1"><button class="logout">Logout</button></a>';
            }
          ?>
        </p>
      </div>
    </div>
  </div>
  <nav>
    <div class="nav-content container">
      <div class="logo">
        <img src="images/logo.png" alt="Fox Chase Logo">
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="amenities.php">Amenities</a></li>
          <li><a href="documents.php">Documents</a></li>
          <li><a href="accounting.php">POA Financials</a></li>
          <li><a href="https://www.pmhcpas.com/onlineoffice.asp">Online Account</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="mobile-menu">
        <i class="flaticon-menu"></i>
        <p>Menu</p>
      </div>
      <div class="site-menu">
        <div class="site-menu-content">
          <div class="close-menu">
            <i class="flaticon-cancel"></i>
          </div>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="amenities.php">Amenities</a></li>
            <li><a href="documents.php">Documents</a></li>
            <li><a href="accounting.php">POA Financials</a></li>
            <li><a href="https://www.pmhcpas.com/onlineoffice.asp">Online Account</a></li>
            <li><a href="events.php">Upcoming Events</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
          <div class="my-account">
            <p>My Account</p>
            <?php
              if($_SESSION['id']==true){
                echo "Welcome, "."<strong>".$_SESSION['email']."</strong>";
                echo '<br><a href="index.php?logout=1"><button class="logout">Logout</button></a>';
              }
            ?>
          </div>
          <div class="site-menu-info">
            <p>More Information</p>
            <div>
              <i class="flaticon-phone-receiver"></i>
              <span><a href="tel:3052643644">305.264.3644</a></span>
            </div>
            <div>
              <i class="flaticon-maps-and-flags"></i>
              <span>8605 NW 8th St, Miami, FL 33126</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
