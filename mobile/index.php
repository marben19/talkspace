<?php
session_start();

if (isset($_SESSION['auth_user_id'])) {
  header("location: http://localhost/talkspace/mobile/components/student/index.php?home");
}

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Affan - PWA Mobile HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>Home Page</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">

  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Web App Manifest -->
  <link rel="manifest" href="manifest.json">
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-grow text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus"></div>

  <!-- Hero Block Wrapper -->
  <div class="hero-block-wrapper bg-primary">
    <!-- Styles -->
    <div class="hero-block-styles">
      <div class="hb-styles1" style="background-image: url('img/core-img/dot.png')"></div>
      <div class="hb-styles2"></div>
      <div class="hb-styles3"></div>
    </div>

    <div class="custom-container">
      <!-- Skip Page -->
      <div class="skip-page">

      </div>

      <!-- Hero Block Content -->
      <div class="hero-block-content">
        <img class="mb-4" src="img/home2.png" alt="">
        <h2 class="display-4 text-white mb-3">TalkSpace</h2>
        <p class="text-white">Providing personalized guidance counseling to help you navigate life's challenges and reach your full potential.</p>
        <a class="btn btn-warning btn-lg w-100" href="login.php">Get Started</a>
      </div>
    </div>
  </div>

  <!-- All JavaScript Files -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/slideToggle.min.js"></script>
  <script src="js/internet-status.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/venobox.min.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/rangeslider.min.js"></script>
  <script src="js/vanilla-dataTables.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/dark-rtl.js"></script>
  <script src="js/active.js"></script>
  <script src="js/pwa.js"></script>
</body>

</html>