<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('admin/header.php');
 
?>

  <body>
      <!-- ========== MAIN CONTENT ========== -->
      <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(https://htmlstream.com/front-dashboard/assets/svg/components/abstract-bg-4.svg);">
          <!-- SVG Bottom Shape -->
          <figure class="position-absolute right-0 bottom-0 left-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
              <polygon fill="#fff" points="0,273 1921,273 1921,0 "></polygon>
            </svg>
          </figure>
          <!-- End SVG Bottom Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
          <a class="d-flex justify-content-center mb-5" href="index.html">
            <img class="z-index-2" src="https://htmlstream.com/front-dashboard/assets/svg/logos/logo.svg" alt="Image Description" style="width: 8rem;">
          </a>

          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
              <!-- Card -->
              <div class="card card-lg mb-5">
                <div class="card-body">
                  <!-- Form -->
                  <form class="js-validate" novalidate="novalidate">
                    <div class="text-center">
                      <div class="mb-5">
                        <h1 class="display-4">Sign in</h1>
                        <p>Don't have an account yet? <a href="authentication-signup-basic.html">Sign up here</a></p>
                      </div>

                      <a class="btn btn-lg btn-block btn-white mb-4" href="https://myaccount.google.com/">
                        <span class="d-flex justify-content-center align-items-center">
                          <img class="avatar avatar-xss mr-2" src="https://htmlstream.com/front-dashboard/assets/svg/brands/google.svg" alt="Image Description">
                          Sign in with Google
                        </span>
                      </a>

                      <span class="divider text-muted mb-4">OR</span>
                    </div>

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label class="input-label" for="signinSrEmail">Your email</label>

                      <input class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required="" data-msg="Please enter a valid email address." type="email">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label class="input-label" for="signupSrPassword" tabindex="0">
                        <span class="d-flex justify-content-between align-items-center">
                          Password
                          <a class="input-label-secondary" href="authentication-reset-password-basic.html">Forgot Password?</a>
                        </span>
                      </label>

                      <div class="input-group input-group-merge">
                        <input class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" data-msg="Your password is invalid. Please try again." data-hs-toggle-password-options="{
                                 &quot;target&quot;: &quot;#changePassTarget&quot;,
                                 &quot;defaultClass&quot;: &quot;tio-hidden-outlined&quot;,
                                 &quot;showClass&quot;: &quot;tio-visible-outlined&quot;,
                                 &quot;classChangeTarget&quot;: &quot;#changePassIcon&quot;
                               }" type="password">
                        <div id="changePassTarget" class="input-group-append">
                          <a class="input-group-text" href="javascript:;">
                          	<i  class="fad fa-eye-slash"></i>
                            <i id="changePassIcon" class="tio-hidden-outlined" hidden></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Checkbox -->
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="termsCheckbox" name="termsCheckbox" type="checkbox">
                        <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                      </div>
                    </div>
                    <!-- End Checkbox -->

                    <button type="submit" class="btn btn-lg btn-block btn-primary">Sign in</button>
                  </form>
                  <!-- End Form -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Footer -->
              <div class="text-center">
                <small class="text-cap mb-4">Trusted by the world's best teams</small>

                <div class="w-85 mx-auto">
                  <div class="row justify-content-between">
                    <div class="col">
                      <img class="img-fluid" src="https://htmlstream.com/front-dashboard/assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="https://htmlstream.com/front-dashboard/assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="https://htmlstream.com/front-dashboard/assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="https://htmlstream.com/front-dashboard/assets/svg/brands/layar-gray.svg" alt="Image Description">
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Footer -->
            </div>
          </div>
        </div>
        <!-- End Content -->
      </main>
      <!-- ========== END MAIN CONTENT ========== -->


      <!-- JS Implementing Plugins -->
      <script src="https://htmlstream.com/front-dashboard/assets/js/vendor.min.js"></script>

      <!-- JS Front -->
      <script src="https://htmlstream.com/front-dashboard/assets/js/theme.min.js"></script>

      <!-- JS Plugins Init. -->
      <script>
        $(document).on('ready', function () {
          // INITIALIZATION OF SHOW PASSWORD
          // =======================================================
          $('.js-toggle-password').each(function () {
            new HSTogglePassword(this).init()
          });


          // INITIALIZATION OF FORM VALIDATION
          // =======================================================
          $('.js-validate').each(function() {
            $.HSCore.components.HSValidation.init($(this));
          });
        });
      </script>

      <!-- IE Support -->
      <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="https://htmlstream.com/front-dashboard/assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
      </script>
    
</body>

</html>