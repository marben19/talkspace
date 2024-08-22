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

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

  <style type="text/css">
      
      .active a i{
        color: #5266fa;
      }
      .active a span{
        color: #5266fa !important;
      }
  </style>

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

  <!-- Dark mode switching -->
  <div class="dark-mode-switching">
    <div class="d-flex w-100 h-100 align-items-center justify-content-center">
      <div class="dark-mode-text text-center">
        <i class="bi bi-moon"></i>
        <p class="mb-0">Switching to dark mode</p>
      </div>
      <div class="light-mode-text text-center">
        <i class="bi bi-brightness-high"></i>
        <p class="mb-0">Switching to light mode</p>
      </div>
    </div>
  </div>

  <?php 

      if (isset($_GET['settings'])) {
       ?>
        <div class="header-area" id="headerArea">
            <div class="container">
              <!-- Header Content-->
              <div class="header-content header-style-four position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button-->
                <div class="back-button">
                  <a class="" style="cursor: pointer;">
                    <i class="bi bi-arrow-left-short"></i>
                  </a>
                </div>

                <!-- Page Title-->
                <div class="page-heading">
                  <h6 class="mb-0">Settings</h6>
                </div>


                <!-- Settings -->
                <div class="setting-wrapper">
                  <div class="setting-trigger-btn" id="settingTriggerBtn">
                    <i class="bi bi-gear"></i>
                    <span></span>
                  </div>
                </div>

              </div>
            </div>
          </div>
       <?php 
      }else if (isset($_GET['updateprofile'])) {
       ?>
        <div class="header-area" id="headerArea">
            <div class="container">
              <!-- Header Content-->
              <div class="header-content header-style-four position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button-->
                <div class="back-button">
                  <a href="?settings">
                    <i class="bi bi-arrow-left-short"></i>
                  </a>
                </div>

                <!-- Page Title-->
                <div class="page-heading">
                  <h6 class="mb-0">Update Profile</h6>
                </div>


                <!-- Settings -->
                <div class="setting-wrapper">
                  <div class="setting-trigger-btn" id="settingTriggerBtn">
                    <i class="bi bi-gear"></i>
                    <span></span>
                  </div>
                </div>

              </div>
            </div>
          </div>
       <?php 
      }else if (isset($_GET['changepassword'])) {
       ?>
        <div class="header-area" id="headerArea">
            <div class="container">
              <!-- Header Content-->
              <div class="header-content header-style-four position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button-->
                <div class="back-button">
                  <a href="?settings">
                    <i class="bi bi-arrow-left-short"></i>
                  </a>
                </div>

                <!-- Page Title-->
                <div class="page-heading">
                  <h6 class="mb-0">Change Password</h6>
                </div>


                <!-- Settings -->
                <div class="setting-wrapper">
                  <div class="setting-trigger-btn" id="settingTriggerBtn">
                    <i class="bi bi-gear"></i>
                    <span></span>
                  </div>
                </div>

              </div>
            </div>
          </div>
       <?php 
      }else if (isset($_GET['privacy'])) {
       ?>
        <div class="header-area" id="headerArea">
            <div class="container">
              <!-- Header Content-->
              <div class="header-content header-style-four position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button-->
                <div class="back-button">
                  <a href="?settings">
                    <i class="bi bi-arrow-left-short"></i>
                  </a>
                </div>

                <!-- Page Title-->
                <div class="page-heading">
                  <h6 class="mb-0">Privacy Policy</h6>
                </div>


                <!-- Settings -->
                <div class="setting-wrapper">
                  <div class="setting-trigger-btn" id="settingTriggerBtn">
                    <i class="bi bi-gear"></i>
                    <span></span>
                  </div>
                </div>

              </div>
            </div>
          </div>
       <?php 
      }else{
       ?>
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
              <!-- Settings -->
              <div class="setting-wrapper">
                <div class="setting-trigger-btn" id="settingTriggerBtn">
                  <i class="bi bi-gear"></i>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>  
           
       <?php
      }

   ?>

   <!-- Setting Popup Overlay -->
  <div id="setting-popup-overlay"></div>

  <!-- Setting Popup Card -->
  <div class="card setting-popup-card shadow-lg" id="settingCard">
    <div class="card-body">
      <div class="container">
        <div class="setting-heading d-flex align-items-center justify-content-between mb-3">
          <p class="mb-0">Mode Settings</p>
          <div class="btn-close" id="settingCardClose"></div>
        </div>

        <div class="single-setting-panel">
          <div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="darkSwitch">
            <label class="form-check-label" for="darkSwitch">Dark mode</label>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="page-content-wrapper">

    <?php
      if (isset($_GET['home'])) {
        include 'pages/home.php';
      } else if (isset($_GET['records'])) {
        include 'pages/records.php';
      } else if (isset($_GET['conference'])) {
        include 'pages/conference.php';
      } else if (isset($_GET['chat'])) {
        include 'pages/chat.php';
      } else if (isset($_GET['settings'])) {
        include 'pages/settings.php';
      } else if (isset($_GET['updateprofile'])) {
        include 'pages/updateprofile.php';
      } else if (isset($_GET['changepassword'])) {
        include 'pages/changepassword.php';
      } else if (isset($_GET['privacy'])) {
        include 'pages/privacy.php';
      }
    ?>

  </div>

  <!-- Footer Nav -->
  <div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
      <!-- Footer Content -->
      <div class="footer-nav position-relative">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
          <li class="<?php if (isset($_GET['home'])) { echo 'active'; } ?>">
            <a href="?home">
              <i class="bi bi-house"></i>
              <span>Home</span>
            </a>
          </li>

          <li class="<?php if (isset($_GET['records'])) { echo 'active'; } ?>">
            <a href="?records">
              <i class="bi bi-folder2-open"></i>
              <span>Records</span>
            </a>
          </li>

          <li class="<?php if (isset($_GET['conference'])) { echo 'active'; } ?>">
            <a href="?conference">
            <i class="bi bi-camera-video"></i>
              <span>Conference</span>
            </a>
          </li>

          <li class="<?php if (isset($_GET['chat'])) { echo 'active'; } ?>">
            <a href="?chat">
              <i class="bi bi-chat-dots"></i>
              <span>Chat</span>
            </a>
          </li>

          <li class="<?php if (isset($_GET['settings'])) { echo 'active'; } ?>">
            <a href="?settings">
              <i class="bi bi-gear"></i>
              <span>Settings</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>



  <!-- All JavaScript Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <?php
    if (isset($_GET['home'])) {
     ?> 
      <script src="js/home.js"></script> 
    <?php
    }
  ?> 

  <script type="text/javascript">


      $(document).on("click", "#sign-out", ()=>{


      $.ajax({
          url:"../../../server/logout",
          type: "POST",
          dataType: "json",
          data: {
              id: '<?= $_SESSION['auth_user_id'] ?>'
          },
          beforeSend: (e) => {
          Swal.fire({
            html: 'Loading...',
            didOpen: () => {
              Swal.showLoading()
            }
          })
          },
          success: (data) => { 

          Swal.close(); 

          window.location.href = "http://localhost/talkspace/mobile";


        }

       }); 

      });

  </script>

</body>

</html>