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

  <!-- Back Button -->
  <div class="login-back-button">
    <a href="login.php">
      <i class="bi bi-arrow-left-short"></i>
    </a>
  </div>

  <!-- Login Wrapper Area -->
  <div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
      <div class="text-center px-4">
        <img class="login-intro-img" src="img/1.png" alt="" style="height: 150px;">
      </div>

      <!-- Register Form -->
      <div class="register-form mt-4">
        <h6 class="mb-3 text-center">Register to continue</h6>
        
        <form action="" style="width: 270px;">
          <div class="form-group  text-start mb-3">
              <select class="form-select" id="usertype" name="defaultSelect" aria-label="Default select example">
                <option value="0" selected="" hidden>Select User Type</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
              </select>
          </div>
          <div class="form-group text-start mb-3">
            <input class="form-control" type="text" id="email" placeholder="Email address">
          </div>

          <div class="form-group text-start mb-3">
            <input class="form-control" type="text" id="uname" placeholder="Full Name">
          </div>

          <div class="form-group text-start mb-3 position-relative">
            <input class="form-control" id="psw-input" type="password" placeholder="New password">
            <div class="position-absolute" id="password-visibility">
              <i class="bi bi-eye"></i>
              <i class="bi bi-eye-slash"></i>
            </div>
          </div>

          <div class="mb-3" id="pswmeter"></div>

          <div class="form-check mb-3">
            <input class="form-check-input" id="checkedCheckbox" type="checkbox" value="" checked>
            <label class="form-check-label text-muted fw-normal" for="checkedCheckbox">I agree with the terms &amp;
              policy.</label>
          </div>

          <button class="btn btn-primary w-100 signup" type="button">Sign Up</button>
        </form>
      </div>

      <!-- Login Meta -->
      <div class="login-meta-data text-center">
        <p class="mt-3 mb-0">Already have an account? <a class="stretched-link" href="login.php">Login</a></p>
      </div>
    </div>
  </div>

  <!-- All JavaScript Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/internet-status.js"></script>
  <script src="js/dark-rtl.js"></script>
  <script src="js/pswmeter.js"></script>
  <script src="js/active.js"></script>
  <script src="js/pwa.js"></script>
  <script>

    $(document).on("click", ".signup", ()=>{

      $.ajax({
            url: "../server/signup",
            type: "POST",
            dataType: "json",
            data: {
                utype: $("#usertype").val(),
                username: $("#uname").val(),
                email: $("#email").val(),
                password: $("#psw-input").val()
            },
            beforeSend: (e) => {
              Swal.fire({
                html: "Loading...",
                didOpen: () => {
                  Swal.showLoading();
                },
              });
            },
            success: (data) => {
              Swal.close();

              if (data.status == 1) {
                    Swal.fire({
                      icon: "success",
                      title: "Request to register has been sent",
                      text: 'Wait for the admin to appove your registration',
                      confirmButtonColor: "#3085d6",
                      cancelButtonColor: "#d33",
                      confirmButtonText: "Ok",
                    }).then((result) => {
                      if (result.isConfirmed) {
                        $("#uname").val("");
                        $("#email").val("");
                        $("#psw-input").val("");
                        $("#usertype").val("");
                      }
                    });
              }else{

                    Swal.fire({
                      icon: "error",
                      title: data.response,
                      confirmButtonColor: "#3085d6",
                      cancelButtonColor: "#d33",
                      confirmButtonText: "Ok",
                    }).then((result) => {
                      if (result.isConfirmed) {
                      
                      }
                    });
                
              }

            },
          });

    });

  </script>
</body>

</html>