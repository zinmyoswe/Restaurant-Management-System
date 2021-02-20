<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('header.php');
  include('navbar.php');
  include('sidebar.php');
$w2 = $_GET['w2'];

  $sql = mysqli_query($conn,"SELECT s.*,r.role_id,r.role_name from staff s
    left join role r
    on s.role_id = r.role_id
    order by s.staff_id desc limit 1");
  $row = mysqli_fetch_assoc($sql);


?>

<?php if($w2 == 'success'){ ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- <script type="text/javascript" src="https://adminlte.io/themes/dev/AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script> -->
                <script type="text/javascript">
            
            const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Staff Address added successfully'
}).then(function() {
            window.location = "add_staff3.php";
        });
 </script>
<?php } elseif($w2 == 'updated'){ ?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       <script type="text/javascript">
            
            Swal.fire({
              icon: 'success',
              title: 'Updated',
              text: 'Staff Address updated successfully'
            }).then(function() {
            window.location = "add_staff3.php";
        });     
                     
          </script>
<?php } ?>

    

    
           
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Step Form -->
    <!--     <form class="js-step-form py-md-5" data-hs-step-form-options="{
                &quot;progressSelector&quot;: &quot;#addUserStepFormProgress&quot;,
                &quot;stepsSelector&quot;: &quot;#addUserStepFormContent&quot;,
                &quot;endSelector&quot;: &quot;#addUserFinishBtn&quot;,
                &quot;isValidate&quot;: false
              }" method="post" action=""> -->
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <!-- Step -->
              <ul id="addUserStepFormProgress" class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                <li class="step-item ">
                  <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options="{
                      &quot;targetSelector&quot;: &quot;#addUserStepProfile&quot;
                    }">
                    <span class="step-icon step-icon-soft-dark">1</span>
                    <div class="step-content">
                      <span class="step-title">Profile</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options="{
                      &quot;targetSelector&quot;: &quot;#addUserStepBillingAddress&quot;
                    }">
                    <span class="step-icon step-icon-soft-dark">2</span>
                    <div class="step-content">
                      <span class="step-title">Staff address</span>
                    </div>
                  </a>
                </li>

                <li class="step-item active focus">
                  <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options="{
                      &quot;targetSelector&quot;: &quot;#addUserStepConfirmation&quot;
                    }">
                    <span class="step-icon step-icon-soft-dark">3</span>
                    <div class="step-content">
                      <span class="step-title">Confirmation</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End Step -->

              <!-- Content Step Form -->
              <div id="addUserStepFormContent">
                <!-- Card -->
                <div id="addUserStepProfile" class="card card-lg active">
                    <!-- Profile Cover -->
                  <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                      <img class="profile-cover-img" src="https://htmlstream.com/front-dashboard/assets/img/1920x400/img1.jpg" alt="Image Description">
                    </div>
                  </div>
                  <!-- End Profile Cover -->

                  <!-- Avatar -->
                  <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                    <img class="avatar-img" src="image/<?php echo $row['image'] ?>" alt="Image Description" style="width: 100%">
                  </div>
                  <!-- End Avatar -->
                  <!-- Body -->
                   <!-- Body -->
                  <div class="card-body">
                    <dl class="row">
                      <dt class="col-sm-6 text-sm-right">Full name:</dt>
                      <dd class="col-sm-6"><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">Email:</dt>
                      <dd class="col-sm-6"><?php echo $row['email'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">Phone:</dt>
                      <dd class="col-sm-6">+<?php echo $row['phone'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">Company:</dt>
                      <dd class="col-sm-6"><?php echo $row['company'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">Position:</dt>
                      <dd class="col-sm-6"><?php echo $row['role_name'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">Account type:</dt>
                      <dd class="col-sm-6">Individual</dd>

                      <?php 

                        include('confs/config.php');
                      
                        $sid = $row['staff_id'];

                        $sql2 = mysqli_query($conn,"SELECT * from staff_address
                          where staff_id = $sid");
                        $row2 = mysqli_fetch_assoc($sql2);
                        $country = $row2['location'];

                      ?>

                      <dt class="col-sm-6 text-sm-right">Country:</dt>
                      <dd class="col-sm-6">
                        <?php if($country == 'MM'){ ?>
                        <img class="avatar avatar-xss avatar-circle mr-1" src="https://htmlstream.com/front-dashboard/assets/vendor/flag-icon-css/flags/1x1/mm.svg" alt="Great Britain Flag"> Myanmar
                        <?php }elseif ($country == 'KR') {?>
                        <img class="avatar avatar-xss avatar-circle mr-1" src="https://htmlstream.com/front-dashboard/assets/vendor/flag-icon-css/flags/1x1/kr.svg" alt="Great Britain Flag"> South Korea

                        <?php }elseif ($country == 'TH') { ?>
                        <img class="avatar avatar-xss avatar-circle mr-1" src="https://htmlstream.com/front-dashboard/assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Great Britain Flag">
                        Thailand

                        <?php } ?>

                      </dd>

                      <dt class="col-sm-6 text-sm-right">City:</dt>
                      <dd class="col-sm-6"><?php echo $row2['city'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">State:</dt>
                      <dd class="col-sm-6"><?php echo $row2['state'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">Address line 1:</dt>
                      <dd class="col-sm-6"><?php echo $row2['address1'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">Address line 2:</dt>
                      <dd class="col-sm-6"><?php echo $row2['address2'] ?></dd>

                      <dt class="col-sm-6 text-sm-right">Zip code:</dt>
                      <dd class="col-sm-6"><?php echo $row2['zip'] ?></dd>
                    </dl>
                    <!-- End Row -->
                  </div>
                  <!-- End Body -->
                  <!-- Footer -->
                  <div class="card-footer d-sm-flex align-items-sm-center">
                    <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0" data-hs-step-form-prev-options="{
                         &quot;targetSelector&quot;: &quot;#addUserStepBillingAddress&quot;
                       }">
                      <i class="fal fa-chevron-left mr-1"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-white mr-2">Save in drafts</button>
                      
                      <a href="view_staff.php?w2=success" class="btn btn-primary">Finish</a>
                     
                    </div>
                  </div>
                  <!-- End Footer -->
                </div>
                <!-- End Card -->
          <!--     ----------------  2nd billing start ------------------------------- -->
                <div id="addUserStepBillingAddress" class="card card-lg" style="display: none;">
                  <!-- Body -->
                  <div class="card-body">
                
                         

                       
                  <!-- Footer -->
                  <div class="card-footer d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-prev-options="{
                         &quot;targetSelector&quot;: &quot;#addUserStepProfile&quot;
                       }">
                      <i class="fal fa-chevron-left"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary" data-hs-step-form-next-options="{
                                &quot;targetSelector&quot;: &quot;#addUserStepConfirmation&quot;
                              }">
                        Next <i class="tio-chevron-right"></i>
                      </button>
                    </div>
                  </div>
                  <!-- End Footer -->
                </div>
                <!--     ----------------  2nd billing end ------------------------------- -->

                <div id="addUserStepConfirmation" class="card card-lg" style="display: none;">
                  <!-- Profile Cover -->
                  <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                      <img class="profile-cover-img" src="https://htmlstream.com/front-dashboard/assets/img/1920x400/img1.jpg" alt="Image Description">
                    </div>
                  </div>
                  <!-- End Profile Cover -->

                  <!-- Avatar -->
                  <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                    <img class="avatar-img" src="https://htmlstream.com/front-dashboard/assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>
                  <!-- End Avatar -->

                  <!-- Body -->
                  <div class="card-body">
                    <dl class="row">
                      <dt class="col-sm-6 text-sm-right">Full name:</dt>
                      <dd class="col-sm-6">Ella Lauda</dd>

                      <dt class="col-sm-6 text-sm-right">Email:</dt>
                      <dd class="col-sm-6">ella@example.com</dd>

                      <dt class="col-sm-6 text-sm-right">Phone:</dt>
                      <dd class="col-sm-6">+1 (609) 972-22-22</dd>

                      <dt class="col-sm-6 text-sm-right">Organization:</dt>
                      <dd class="col-sm-6">Htmlstream</dd>

                      <dt class="col-sm-6 text-sm-right">Department:</dt>
                      <dd class="col-sm-6">-</dd>

                      <dt class="col-sm-6 text-sm-right">Account type:</dt>
                      <dd class="col-sm-6">Individual</dd>

                      <dt class="col-sm-6 text-sm-right">Country:</dt>
                      <dd class="col-sm-6"><img class="avatar avatar-xss avatar-circle mr-1" src="https://htmlstream.com/front-dashboard/assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag"> United Kingdom</dd>

                      <dt class="col-sm-6 text-sm-right">City:</dt>
                      <dd class="col-sm-6">London</dd>

                      <dt class="col-sm-6 text-sm-right">State:</dt>
                      <dd class="col-sm-6">-</dd>

                      <dt class="col-sm-6 text-sm-right">Address line 1:</dt>
                      <dd class="col-sm-6">45 Roker Terrace, Latheronwheel</dd>

                      <dt class="col-sm-6 text-sm-right">Address line 2:</dt>
                      <dd class="col-sm-6">-</dd>

                      <dt class="col-sm-6 text-sm-right">Zip code:</dt>
                      <dd class="col-sm-6">KW5 8NW</dd>
                    </dl>
                    <!-- End Row -->
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <div class="card-footer d-sm-flex align-items-sm-center">
                    <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0" data-hs-step-form-prev-options="{
                         &quot;targetSelector&quot;: &quot;#addUserStepBillingAddress&quot;
                       }">
                      <i class="tio-chevron-left"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-white mr-2">Save in drafts</button>
                      <button id="addUserFinishBtn" type="button"  name="cat" class="btn btn-primary">Add user</button>
                     
                    </div>
                  </div>
                  <!-- End Footer -->
                </div>
              </div>
              <!-- End Content Step Form -->

              <!-- Message Body -->
              <div id="successMessageContent" style="display:none;">
                <div class="text-center">
                  <img class="img-fluid mb-3" src="https://htmlstream.com/front-dashboard/assets/svg/illustrations/hi-five.svg" alt="Image Description" style="max-width: 15rem;">

                  <div class="mb-4">
                    <h2>Successful!</h2>
                    <p>New <span class="font-weight-bold text-dark">Ella Lauda</span> user has been successfully created.</p>
                  </div>

                  <div class="d-flex justify-content-center">
                    <a class="btn btn-white mr-3" href="users.html">
                      <i class="tio-chevron-left ml-1"></i> Back to users
                    </a>
                    <a class="btn btn-primary" href="users-add-user.html">
                      <i class="tio-user-add mr-1"></i> Add new user
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Message Body -->
            </div>
          </div>
          <!-- End Row -->
    <!--     </form> -->
        <!-- End Step Form -->
      </div>
      <!-- End Content -->

     
 <?php include('footer2.php'); ?>

 <!-- JS Implementing Plugins -->
    <script src="https://htmlstream.com/front-dashboard/assets/js/vendor.min.js"></script>
    
    

    <!-- JS Front -->
    <script src="https://htmlstream.com/front-dashboard/assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
              .on('shown.bs.popover', function () {
                $('.popover').last().addClass('popover-dark')
              });

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        
          // INITIALIZATION OF MEGA MENU
          // =======================================================
          var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
              position: 'left'
            }
          }).init();
        

        
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        
        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        
        // INITIALIZATION OF STEP FORM
        // =======================================================
        $('.js-step-form').each(function () {
          var stepForm = new HSStepForm($(this), {
            finish: function() {
              $("#addUserStepFormProgress").hide();
              $("#addUserStepFormContent").hide();
              $("#successMessageContent").show();
            }
          }).init();
        });

        
        // INITIALIZATION OF MASKED INPUT
        // =======================================================
        $('.js-masked-input').each(function () {
          var mask = $.HSCore.components.HSMask.init($(this));
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        
        // INITIALIZATION OF ADD INPUT FILED
        // =======================================================
        $('.js-add-field').each(function () {
          new HSAddField($(this), {
            addedField: function() {
              $('.js-add-field .js-select2-custom-dynamic').each(function () {
                var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
              });
            }
          }).init();
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="https://htmlstream.com/front-dashboard/assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  

<div class="hs-unfold-overlay"></div></body>