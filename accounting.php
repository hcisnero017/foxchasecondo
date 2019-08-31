<?php
  require_once 'controllers/authController.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Welcome to Fox Chase Condominium Association">
    <title>Accounting | Fox Chase Condominium Association</title>
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
          <h3>Prepared Financial Statements</h3>
          <p>All documents of the Fox Chase Condominium Association in one place.</p>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Prepared Financial Statements - POA</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - January, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/Financial-POA-January-2019.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Febraury, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/Financial-POA-Febraury-2019.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - March, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/Financial-POA-March-2019.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - April, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/Financial-POA-April-2019.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - May, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b1/265-FS-2019-05-May.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Jun, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/Financial-POA-June-2019.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Jul, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/Financial-POA-July-2019.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Prepared Financial Statements - Building I</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - January, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b1/265-FS-2019-01-Jan.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Febraury, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b1/265-FS-2019-02-Feb.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - March, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b1/265-FS-2019-03-Mar.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - April, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b1/265-FS-2019-04-Apr.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - May, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b1/265-FS-2019-05-May.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Jun, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b1/265-FS-2019-06-Jun.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Jul, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b1/265-FS-2019-07-Jul.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Prepared Financial Statements - Building II</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - January, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b2/266-FS-2019-01-Jan.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Febraury, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b2/266-FS-2019-02-Feb.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - March, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b2/266-FS-2019-03-Mar.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - April, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b2/266-FS-2019-04-Apr.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - May, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b2/266-FS-2019-05-May.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Jun, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b2/266-FS-2019-06-Jun.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Jul, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b2/266-FS-2019-07-Jul.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Prepared Financial Statements - Building III</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - January, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b3/267-FS-2019-01-Jan.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Febraury, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b3/267-FS-2019-02-Feb.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - March, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b3/267-FS-2019-03-Mar.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - April, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b3/267-FS-2019-04-Apr.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - May, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b3/267-FS-2019-05-May.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Jun, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b3/267-FS-2019-06-Jun.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Prepared Financial Statements - Jul, 2019</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/POA/b3/267-FS-2019-07-Jul.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
        </div>
        <div class="pdf-doc">
          <div class="sub-section-title">
            <p>Year Ended Financial Statements - December 31, 2018</p>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Year Ended Financial Statements</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Year-Ended-Financial-Statements-POA.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Year Ended Financial Statements - No. 1</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Year-Ended-Financial-Statements-No1.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Year Ended Financial Statements - No. 2</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Year-Ended-Financial-Statements-No2.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
          <div class="pdf-files">
            <div>
              <i class="flaticon-pdf-file-format-symbol"></i>
              <p>Year Ended Financial Statements - No. 3</p>
            </div>
            <div class="download-btn">
              <i class="flaticon-download"></i>
              <a href="files/Year-Ended-Financial-Statements-No3.pdf" target="_blank"><p>Download Document</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
