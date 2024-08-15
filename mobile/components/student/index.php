<?php
session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
if (!isset($_SESSION['auth_user_id'])) {
	// header("location: http://localhost/lms/student.php");
}
?>

<!DOCTYPE html>
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
  <title>Affan - PWA Mobile HTML Template</title>

  <!-- Favicon -->
  <link rel="icon" href="../../img/core-img/favicon.ico">
  <link rel="apple-touch-icon" href="../../img/icons/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../img/icons/icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="../../img/icons/icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../img/icons/icon-180x180.png">

  <!-- Style CSS -->
  <link rel="stylesheet" href="../../style.css">

  <!-- Web App Manifest -->
  <link rel="manifest" href="../../manifest.json">
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

  <!-- Header Area -->
  <div class="header-area" id="headerArea">
    <div class="container">
      <!-- Header Content -->
      <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper">
          <a href="home.html">
            <img src="../../img/small.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>

 

  <div class="page-content-wrapper">

    <!-- Welcome Toast -->
    <div class="toast toast-autohide custom-toast-1 toast-primary home-page-toast shadow" role="alert" aria-live="assertive" aria-atomic="true"
    data-bs-delay="60000" data-bs-autohide="true" id="installWrap">
      <div class="toast-body p-4">
        <div class="toast-text me-2">
          <h6 class="text-white">Welcome to TalkSpace!</h6>
          <span class="d-block mb-2">Where compassionate guidance meets personalized support to help you navigate life's challenges.</span>
     
        </div>
      </div>
      <button class="btn btn-close btn-close-white position-absolute p-2" type="button" data-bs-dismiss="toast"
        aria-label="Close"></button>
    </div>






  

    

    
  </div>

  <!-- Footer Nav -->
  <div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
      <!-- Footer Content -->
      <div class="footer-nav position-relative">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
          <li class="active">
            <a href="home.html">
              <i class="bi bi-house"></i>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a href="pages.html">
              <i class="bi bi-folder2-open"></i>
              <span>Records</span>
            </a>
          </li>

          <li>
            <a href="elements.html">
            <i class="bi bi-camera-video"></i>
              <span>Conference</span>
            </a>
          </li>

          <li>
            <a href="chat-users.html">
              <i class="bi bi-chat-dots"></i>
              <span>Chat</span>
            </a>
          </li>

          <li>
            <a href="settings.html">
              <i class="bi bi-gear"></i>
              <span>Settings</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- All JavaScript Files -->
  <script src="../../js/bootstrap.bundle.min.js"></script>
  <script src="../../js/slideToggle.min.js"></script>
  <script src="../../js/internet-status.js"></script>
  <script src="../../js/tiny-slider.js"></script>
  <script src="../../js/venobox.min.js"></script>
  <script src="../../js/countdown.js"></script>
  <script src="../../js/rangeslider.min.js"></script>
  <script src="../../js/vanilla-dataTables.min.js"></script>
  <script src="../../js/index.js"></script>
  <script src="../../js/imagesloaded.pkgd.min.js"></script>
  <script src="../../js/isotope.pkgd.min.js"></script>
  <script src="../../js/dark-rtl.js"></script>
  <script src="../../js/active.js"></script>
  <script src="../../js/pwa.js"></script>
</body>

</html>