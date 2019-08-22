<?php
  require_once 'controllers/authController.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Welcome to Fox Chase Condominium Association">
    <title>Events | Fox Chase Condominium Association</title>
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
    <?php
      if($_SESSION['id']==true){
      } else {
        header('location: login.php');
      }
    ?>
    <?php include 'header.php'; ?>
    <div class="documents">
      <div class="documents-content container">
        <div class="section-title">
          <h3>Events</h3>
          <p>Stay informed with our list of events.</p>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Annual Meetings - May 14, 2019</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Summary of the association's annual meeting | Spanish - (May, 2019)</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/summary-annual-meeting-2019-spanish.pdf" target="_blank"> <p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Summary of the association's annual meeting | English - (May, 2019)</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/summary-annual-meeting-2019-english.pdf" target="_blank"> <p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Election Monitor Report - Fox Chase  No. 1 - Election of Directors (May, 2019)</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/ElectionMonitorReport-FoxChaseNo.1-ElectionofDirectors.pdf" target="_blank"> <p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Election Monitor Report - Fox Chase  No. 1- Election of Representative (May, 2019)</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/ElectionMonitorReport-FoxChase No.1-ElectionofRepresentative.pdf" target="_blank"> <p>Download Document</p></a>
            </div>
          </div>
        </div>
      </div>
      <div class="events">
        <div class="events-content container">
          <div class="event-list">
            <div class="event-box">
              <span>June 18, 2019</span>
              <p>At the request of Martha Morales and Norma Graciano, an inspection and recounting of ballots and envelopes of the elections of Fox Chase # 1 and Fox Chase # 2 were made, with the participation of Erick Martinez, Ildelisa Perez, Martha Morales, Norma Graciano, Marvelis Martinez, Nicolas Alvares and Jose Romero. After several discussions and lack of respect, the recount ended without any change to the count that was made on the day of the elections.</p>
            </div>
            <div class="event-box">
              <span>July 16, 2019</span>
              <div class="event-pdf">
                <p>Mitchell's Lawn LLC - Memo</p>
                <div class="download-btn">
                  <i class="flaticon-download"></i>
                  <a href="files/Memo-Mitchell's-Lawn-LLC.pdf" target="_blank"><p>Download Document</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
