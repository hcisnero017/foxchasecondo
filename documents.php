<?php
  require_once 'controllers/authController.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Welcome to Fox Chase Condominium Association">
    <title>Documents | Fox Chase Condominium Association</title>
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
          <h3>Documents & Applications</h3>
          <p>All documents of the Fox Chase Condominium Association in one place.</p>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Certification of Amendments of Declaration of Condominium</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Fox Chase Condominium Association, Inc. - Recorded Governing Documents</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Fox-Chase-Property-Owners-Association.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Fox Chase Condominium No. 1 Association, Inc. - Recorded Governing Documents</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Fox-Chase-Condominium-No1-Association.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Fox Chase Condominium No. 2 Association, Inc. - Recorded Governing Documents</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Fox-Chase-Condominium-No2-Association.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Fox Chase Condominium No. 3 Association, Inc. - Recorded Governing Documents</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Fox-Chase-Condominium-No3-Association.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Rules and Regulations - 1994</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Rules and Regulations</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Rules-Regulations.pdf" target="_blank"> <p>Download Document</p></a>
            </div>
          </div>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Service Contracts</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Better Waste Management - Service Agreement</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Better-Waste-Management-Service-Agreement.pdf" target="_blank"> <p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Laundry Space Lease Agreement</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Laundry-Space-Lease-Agreement.pdf" target="_blank"> <p>Download Document</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
