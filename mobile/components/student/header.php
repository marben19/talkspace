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