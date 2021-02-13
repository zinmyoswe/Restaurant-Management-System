<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('header.php');
  include('navbar.php');
  include('sidebar.php');

?>



    <!-- ONLY DEV -->
    
      <!-- Builder -->
      <div id="styleSwitcherDropdown" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated" style="width: 35rem; animation-duration: 300ms;" data-hs-target-height="0" data-hs-unfold-content="" data-hs-unfold-content-animation-in="fadeInRight" data-hs-unfold-content-animation-out="fadeOutRight">
        <div class="card card-lg border-0 h-100">
          <div class="card-header align-items-start">
            <div class="mr-2">
              <h3 class="card-header-title">Front Builder</h3>
              <p>Customize your overview page layout. Choose the one that best fits your needs.</p>
            </div>

            <!-- Toggle Button -->
            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark" href="javascript:;" data-hs-unfold-options="{
                  &quot;target&quot;: &quot;#styleSwitcherDropdown&quot;,
                  &quot;type&quot;: &quot;css-animation&quot;,
                  &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                  &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                  &quot;hasOverlay&quot;: true,
                  &quot;smartPositionOff&quot;: true
                 }" data-hs-unfold-target="#styleSwitcherDropdown" data-hs-unfold-invoker="">
              <i class="tio-clear tio-lg"></i>
            </a>
            <!-- End Toggle Button -->
          </div>

          <!-- Body -->
          <div class="card-body sidebar-scrollbar">
            <h4 class="mb-1">Layout skins <span id="js-builder-disabled" class="badge badge-soft-danger" style="opacity: 0">Disabled</span></h4>
            <p>3 kinds of layout skins to choose from.</p>

            <div class="row gx-2 mb-5">
              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio1" checked="" value="default" type="radio">
                    <label class="custom-checkbox-card-label" for="layoutSkinsRadio1">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/layouts-sidebar-default.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Default</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio2" value="navbar-dark" type="radio">
                    <label class="custom-checkbox-card-label" for="layoutSkinsRadio2">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/layouts-sidebar-dark.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Dark</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio3" value="navbar-light" type="radio">
                    <label class="custom-checkbox-card-label" for="layoutSkinsRadio3">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/layouts-sidebar-light.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Light</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->
            </div>
            <!-- End Row -->

            <h4 class="mb-1">Sidebar layout options</h4>
            <p>Choose between standard navigation sizing, mini or even compact with icons.</p>

            <div class="row gx-2 mb-5">
              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions1" checked="" value="default" type="radio">
                    <label class="custom-checkbox-card-label" for="sidebarLayoutOptions1">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/sidebar-default-classic.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Default</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions2" value="navbar-vertical-aside-compact-mode" type="radio">
                    <label class="custom-checkbox-card-label" for="sidebarLayoutOptions2">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/sidebar-compact.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Compact</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions3" value="navbar-vertical-aside-mini-mode" type="radio">
                    <label class="custom-checkbox-card-label" for="sidebarLayoutOptions3">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/sidebar-mini.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Mini</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->
            </div>
            <!-- End Row -->

            <h4 class="mb-1">Header layout options</h4>
            <p>Choose the primary navigation of your header layout.</p>

            <div class="row gx-2">
              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions1" value="single" type="radio">
                    <label class="custom-checkbox-card-label" for="headerLayoutOptions1">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/header-default-fluid.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Default (Fluid)</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions2" value="single-container" type="radio">
                    <label class="custom-checkbox-card-label" for="headerLayoutOptions2">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/header-default-container.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Default (Container)</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions3" value="double" type="radio">
                    <label class="custom-checkbox-card-label" for="headerLayoutOptions3">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/header-double-line-fluid.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Double line (Fluid)</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center mt-2">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions4" value="double-container" type="radio">
                    <label class="custom-checkbox-card-label" for="headerLayoutOptions4">
                      <img class="custom-checkbox-card-img" src="./assets/svg/layouts/header-double-line-container.svg" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Double line (Container)</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="card-footer">
            <div class="row gx-2">
              <div class="col">
                <button type="button" id="js-builder-reset" class="btn btn-block btn-lg btn-white">
                  <i class="tio-restore"></i> Reset
                </button>
              </div>
              <div class="col">
                <button type="button" id="js-builder-preview" class="btn btn-block btn-lg btn-primary">
                  <i class="tio-visible"></i> Preview
                </button>
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Footer -->
        </div>
      </div>
      <!-- End Builder -->

      <!-- Builder Toggle -->
      <div class="d-none d-md-block position-fixed bottom-0 right-0 mr-5 mb-10" style="z-index: 3;">
        <div style="position: fixed; top: 50%; right: 0; margin-right: -.25rem; transform: translateY(-50%); writing-mode: vertical-rl; text-orientation: sideways;">
          <div class="hs-unfold">
            <a id="builderPopover" class="js-hs-unfold-invoker btn btn-sm btn-soft-dark py-3" href="javascript:;" data-template="<div class=&quot;d-none d-md-block popover&quot; role=&quot;tooltip&quot;><div class=&quot;arrow&quot;></div><h3 class=&quot;popover-header&quot;></h3><div class=&quot;popover-body&quot;></div></div>" data-toggle="popover" data-placement="left" title="" data-content="Customize your overview page layout. Choose the one that best fits your needs." data-html="true" data-hs-unfold-options="{
                &quot;target&quot;: &quot;#styleSwitcherDropdown&quot;,
                &quot;type&quot;: &quot;css-animation&quot;,
                &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                &quot;hasOverlay&quot;: true,
                &quot;smartPositionOff&quot;: true
               }" data-hs-unfold-target="#styleSwitcherDropdown" data-hs-unfold-invoker="" data-original-title="<div class='d-flex align-items-center'>Front Builder <a href='#!' class='close close-light ml-auto'><i id='closeBuilderPopover' class='tio-clear'></i></a></div>">
              <i class="tio-tune mr-2"></i>
              <span class="font-weight-bold text-uppercase">Builder</span>
            </a>
          </div>
        </div>
      </div>
      <!-- End Builder Toggle -->

      <!-- JS Preview mode only -->
      
      
      
      
      

      <script src="./assets/js/demo.js"></script>
    
    <!-- END ONLY DEV -->

    <!-- Search Form -->
    <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated" data-hs-target-height="0" data-hs-unfold-content="" data-hs-unfold-content-animation-in="fadeIn" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
      <form class="input-group input-group-merge input-group-borderless">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="tio-search"></i>
          </div>
        </div>

        <input class="form-control rounded-0" placeholder="Search in front" aria-label="Search in front" type="search">

        <div class="input-group-append">
          <div class="input-group-text">
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options="{
                   &quot;target&quot;: &quot;#searchDropdown&quot;,
                   &quot;type&quot;: &quot;css-animation&quot;,
                   &quot;animationIn&quot;: &quot;fadeIn&quot;,
                   &quot;hasOverlay&quot;: &quot;rgba(46, 52, 81, 0.1)&quot;,
                   &quot;closeBreakpoint&quot;: &quot;md&quot;
                 }" data-hs-unfold-target="#searchDropdown" data-hs-unfold-invoker="">
                <i class="tio-clear tio-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- End Search Form -->

    <!-- ========== HEADER ========== -->
    

    

    
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main pointer-event">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <h1 class="page-header-title">Dashboard</h1>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal">
                <i class="tio-user-add mr-1"></i> Invite users
              </a>
            </div>
          </div>
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Total Users</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2">72,540</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas class="js-chart chartjs-render-monitor" data-hs-chartjs-options="{
                                &quot;type&quot;: &quot;line&quot;,
                                &quot;data&quot;: {
                                   &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                   &quot;datasets&quot;: [{
                                    &quot;data&quot;: [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                    &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                    &quot;borderColor&quot;: &quot;#377dff&quot;,
                                    &quot;borderWidth&quot;: 2,
                                    &quot;pointRadius&quot;: 0,
                                    &quot;pointHoverRadius&quot;: 0
                                  }]
                                },
                                &quot;options&quot;: {
                                   &quot;scales&quot;: {
                                     &quot;yAxes&quot;: [{
                                       &quot;display&quot;: false
                                     }],
                                     &quot;xAxes&quot;: [{
                                       &quot;display&quot;: false
                                     }]
                                   },
                                  &quot;hover&quot;: {
                                    &quot;mode&quot;: &quot;nearest&quot;,
                                    &quot;intersect&quot;: false
                                  },
                                  &quot;tooltips&quot;: {
                                    &quot;postfix&quot;: &quot;k&quot;,
                                    &quot;hasIndicator&quot;: true,
                                    &quot;intersect&quot;: false
                                  }
                                }
                              }" style="display: block; height: 48px; width: 106px;" width="132" height="60">
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-success">
                  <i class="tio-trending-up"></i> 12.5%
                </span>
                <span class="text-body font-size-sm ml-1">from 70,104</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Sessions</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2">29.4%</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas class="js-chart chartjs-render-monitor" data-hs-chartjs-options="{
                                &quot;type&quot;: &quot;line&quot;,
                                &quot;data&quot;: {
                                   &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                   &quot;datasets&quot;: [{
                                    &quot;data&quot;: [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                    &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                    &quot;borderColor&quot;: &quot;#377dff&quot;,
                                    &quot;borderWidth&quot;: 2,
                                    &quot;pointRadius&quot;: 0,
                                    &quot;pointHoverRadius&quot;: 0
                                  }]
                                },
                                &quot;options&quot;: {
                                   &quot;scales&quot;: {
                                     &quot;yAxes&quot;: [{
                                       &quot;display&quot;: false
                                     }],
                                     &quot;xAxes&quot;: [{
                                       &quot;display&quot;: false
                                     }]
                                   },
                                  &quot;hover&quot;: {
                                    &quot;mode&quot;: &quot;nearest&quot;,
                                    &quot;intersect&quot;: false
                                  },
                                  &quot;tooltips&quot;: {
                                    &quot;postfix&quot;: &quot;%&quot;,
                                    &quot;hasIndicator&quot;: true,
                                    &quot;intersect&quot;: false
                                  }
                                }
                              }" style="display: block; height: 48px; width: 106px;" width="132" height="60">
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-success">
                  <i class="tio-trending-up"></i> 1.7%
                </span>
                <span class="text-body font-size-sm ml-1">from 29.1%</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Avg. Click Rate</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2">56.8%</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas class="js-chart chartjs-render-monitor" data-hs-chartjs-options="{
                                &quot;type&quot;: &quot;line&quot;,
                                &quot;data&quot;: {
                                   &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                   &quot;datasets&quot;: [{
                                    &quot;data&quot;: [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                    &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                    &quot;borderColor&quot;: &quot;#377dff&quot;,
                                    &quot;borderWidth&quot;: 2,
                                    &quot;pointRadius&quot;: 0,
                                    &quot;pointHoverRadius&quot;: 0
                                  }]
                                },
                                &quot;options&quot;: {
                                   &quot;scales&quot;: {
                                     &quot;yAxes&quot;: [{
                                       &quot;display&quot;: false
                                     }],
                                     &quot;xAxes&quot;: [{
                                       &quot;display&quot;: false
                                     }]
                                   },
                                  &quot;hover&quot;: {
                                    &quot;mode&quot;: &quot;nearest&quot;,
                                    &quot;intersect&quot;: false
                                  },
                                  &quot;tooltips&quot;: {
                                    &quot;postfix&quot;: &quot;%&quot;,
                                    &quot;hasIndicator&quot;: true,
                                    &quot;intersect&quot;: false
                                  }
                                }
                              }" style="display: block; height: 48px; width: 106px;" width="132" height="60">
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-danger">
                  <i class="tio-trending-down"></i> 4.4%
                </span>
                <span class="text-body font-size-sm ml-1">from 61.2%</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Pageviews</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2">92,913</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas class="js-chart chartjs-render-monitor" data-hs-chartjs-options="{
                                &quot;type&quot;: &quot;line&quot;,
                                &quot;data&quot;: {
                                   &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                   &quot;datasets&quot;: [{
                                    &quot;data&quot;: [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                    &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                    &quot;borderColor&quot;: &quot;#377dff&quot;,
                                    &quot;borderWidth&quot;: 2,
                                    &quot;pointRadius&quot;: 0,
                                    &quot;pointHoverRadius&quot;: 0
                                  }]
                                },
                                &quot;options&quot;: {
                                   &quot;scales&quot;: {
                                     &quot;yAxes&quot;: [{
                                       &quot;display&quot;: false
                                     }],
                                     &quot;xAxes&quot;: [{
                                       &quot;display&quot;: false
                                     }]
                                   },
                                  &quot;hover&quot;: {
                                    &quot;mode&quot;: &quot;nearest&quot;,
                                    &quot;intersect&quot;: false
                                  },
                                  &quot;tooltips&quot;: {
                                    &quot;postfix&quot;: &quot;k&quot;,
                                    &quot;hasIndicator&quot;: true,
                                    &quot;intersect&quot;: false
                                  }
                                }
                              }" style="display: block; height: 48px; width: 106px;" width="132" height="60">
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-secondary">0.0%</span>
                <span class="text-body font-size-sm ml-1">from 2,913</span>
              </div>
            </a>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Stats -->

        <div class="row gx-2 gx-lg-3">
          <div class="col-lg-5 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Import data into Front Dashboard</h5>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options="{
                       &quot;target&quot;: &quot;#reportsOverviewDropdown2&quot;,
                       &quot;type&quot;: &quot;css-animation&quot;
                     }" data-hs-unfold-target="#reportsOverviewDropdown2" data-hs-unfold-invoker="">
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="reportsOverviewDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y" data-hs-target-height="247.833" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInUp" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share chart
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-download-to dropdown-item-icon"></i> Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <p>See and talk to your users and leads immediately by importing your data into the Front Dashboard platform.</p>

                <ul class="list-group list-group-flush list-group-no-gutters">
                  <li class="list-group-item py-3">
                    <h5 class="modal-title">Import users from:</h5>
                  </li>

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/capsule.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Capsule</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/mailchimp.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Mailchimp</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/google-webdev.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Webdev</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <li class="list-group-item"><small>Or you can <a href="#">sync data to Front Dashboard</a> to ensure your data is always up-to-date.</small></li>
                </ul>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-7 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Monthly expenses</h5>

                <!-- Nav -->
                <ul class="nav nav-segment" id="expensesTab" role="tablist">
                  <li class="nav-item" data-toggle="chart-bar" data-datasets="thisWeek" data-trigger="click" data-action="toggle">
                    <a class="nav-link active" href="javascript:;" data-toggle="tab">This week</a>
                  </li>
                  <li class="nav-item" data-toggle="chart-bar" data-datasets="lastWeek" data-trigger="click" data-action="toggle">
                    <a class="nav-link" href="javascript:;" data-toggle="tab">Last week</a>
                  </li>
                </ul>
                <!-- End Nav -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <div class="row mb-4">
                  <div class="col-sm mb-2 mb-sm-0">
                    <div class="d-flex align-items-center">
                      <span class="h1 mb-0">35%</span>
                      <span class="text-success ml-2">
                        <i class="tio-trending-up"></i> 25.3%
                      </span>
                    </div>
                  </div>

                  <div class="col-sm-auto align-self-sm-end">
                    <!-- Legend Indicators -->
                    <div class="row font-size-sm">
                      <div class="col-auto">
                        <span class="legend-indicator bg-primary"></span> New
                      </div>
                      <div class="col-auto">
                        <span class="legend-indicator"></span> Overdue
                      </div>
                    </div>
                    <!-- End Legend Indicators -->
                  </div>
                </div>
                <!-- End Row -->

                <!-- Bar Chart -->
                <div class="chartjs-custom"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="updatingData" style="height: 320px; display: block; width: 639px;" data-hs-chartjs-options="{
                            &quot;type&quot;: &quot;bar&quot;,
                            &quot;data&quot;: {
                              &quot;labels&quot;: [&quot;May 1&quot;, &quot;May 2&quot;, &quot;May 3&quot;, &quot;May 4&quot;, &quot;May 5&quot;, &quot;May 6&quot;, &quot;May 7&quot;, &quot;May 8&quot;, &quot;May 9&quot;, &quot;May 10&quot;],
                              &quot;datasets&quot;: [{
                                &quot;data&quot;: [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                                &quot;backgroundColor&quot;: &quot;#377dff&quot;,
                                &quot;hoverBackgroundColor&quot;: &quot;#377dff&quot;,
                                &quot;borderColor&quot;: &quot;#377dff&quot;
                              },
                              {
                                &quot;data&quot;: [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                                &quot;backgroundColor&quot;: &quot;#e7eaf3&quot;,
                                &quot;borderColor&quot;: &quot;#e7eaf3&quot;
                              }]
                            },
                            &quot;options&quot;: {
                              &quot;scales&quot;: {
                                &quot;yAxes&quot;: [{
                                  &quot;gridLines&quot;: {
                                    &quot;color&quot;: &quot;#e7eaf3&quot;,
                                    &quot;drawBorder&quot;: false,
                                    &quot;zeroLineColor&quot;: &quot;#e7eaf3&quot;
                                  },
                                  &quot;ticks&quot;: {
                                    &quot;beginAtZero&quot;: true,
                                    &quot;stepSize&quot;: 100,
                                    &quot;fontSize&quot;: 12,
                                    &quot;fontColor&quot;: &quot;#97a4af&quot;,
                                    &quot;fontFamily&quot;: &quot;Open Sans, sans-serif&quot;,
                                    &quot;padding&quot;: 10,
                                    &quot;postfix&quot;: &quot;$&quot;
                                  }
                                }],
                                &quot;xAxes&quot;: [{
                                  &quot;gridLines&quot;: {
                                    &quot;display&quot;: false,
                                    &quot;drawBorder&quot;: false
                                  },
                                  &quot;ticks&quot;: {
                                    &quot;fontSize&quot;: 12,
                                    &quot;fontColor&quot;: &quot;#97a4af&quot;,
                                    &quot;fontFamily&quot;: &quot;Open Sans, sans-serif&quot;,
                                    &quot;padding&quot;: 5
                                  },
                                  &quot;categoryPercentage&quot;: 0.5,
                                  &quot;maxBarThickness&quot;: &quot;10&quot;
                                }]
                              },
                              &quot;cornerRadius&quot;: 2,
                              &quot;tooltips&quot;: {
                                &quot;prefix&quot;: &quot;$&quot;,
                                &quot;hasIndicator&quot;: true,
                                &quot;mode&quot;: &quot;index&quot;,
                                &quot;intersect&quot;: false
                              },
                              &quot;hover&quot;: {
                                &quot;mode&quot;: &quot;nearest&quot;,
                                &quot;intersect&quot;: true
                              }
                            }
                          }" width="798" height="400" class="chartjs-render-monitor"></canvas>
                </div>
                <!-- End Bar Chart -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Row -->

        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-12 col-md">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="card-header-title">Users</h5>

                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->
                </div>
              </div>

              <div class="col-auto">
                <!-- Filter -->
                <div class="row align-items-sm-center">
                  <div class="col-sm-auto">
                    <div class="d-flex align-items-center mr-2">
                      <span class="text-secondary mr-2">Status:</span>

                      <!-- Select -->
                      <select class="js-select2-custom js-datatable-filter custom-select-sm select2-hidden-accessible" size="1" style="opacity: 0;" data-target-column-index="2" data-hs-select2-options="{
                                &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                                &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless&quot;,
                                &quot;dropdownAutoWidth&quot;: true,
                                &quot;width&quot;: true
                              }" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="" data-select2-id="3">All</option>
                        <option value="successful" data-select2-id="4">Successful</option>
                        <option value="overdue" data-select2-id="5">Overdue</option>
                        <option value="pending" data-select2-id="6">Pending</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style=""><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-1anx-container"><span class="select2-selection__rendered" id="select2-1anx-container" role="textbox" aria-readonly="true" title="All"><span>All</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      <!-- End Select -->
                    </div>
                  </div>

                  <div class="col-sm-auto">
                    <div class="d-flex align-items-center mr-2">
                      <span class="text-secondary mr-2">Signed up:</span>

                      <!-- Select -->
                      <select class="js-select2-custom js-datatable-filter custom-select-sm select2-hidden-accessible" size="1" style="opacity: 0;" data-target-column-index="5" data-hs-select2-options="{
                                &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                                &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless&quot;,
                                &quot;dropdownAutoWidth&quot;: true,
                                &quot;width&quot;: true
                              }" data-select2-id="7" tabindex="-1" aria-hidden="true">
                        <option value="" data-select2-id="9">All</option>
                        <option value="1 year ago" data-select2-id="10">1 year ago</option>
                        <option value="6 months ago" data-select2-id="11">6 months ago</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style=""><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-rdrm-container"><span class="select2-selection__rendered" id="select2-rdrm-container" role="textbox" aria-readonly="true" title="All"><span>All</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      <!-- End Select -->
                    </div>
                  </div>

                  <div class="col-md">
                    <form>
                      <!-- Search -->
                      <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tio-search"></i>
                          </div>
                        </div>
                        <input id="datatableSearch" class="form-control" placeholder="Search users" aria-label="Search users" type="search">
                      </div>
                      <!-- End Search -->
                    </form>
                  </div>
                </div>
                <!-- End Filter -->
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <div id="datatable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="datatable_filter" class="dataTables_filter"><label>Search:<input class="" placeholder="" aria-controls="datatable" type="search"></label></div><table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer" data-hs-datatables-options="{
                     &quot;columnDefs&quot;: [{
                        &quot;targets&quot;: [0, 1, 4],
                        &quot;orderable&quot;: false
                      }],
                     &quot;order&quot;: [],
                     &quot;info&quot;: {
                       &quot;totalQty&quot;: &quot;#datatableWithPaginationInfoTotalQty&quot;
                     },
                     &quot;search&quot;: &quot;#datatableSearch&quot;,
                     &quot;entries&quot;: &quot;#datatableEntries&quot;,
                     &quot;pageLength&quot;: 8,
                     &quot;isResponsive&quot;: false,
                     &quot;isShowPaging&quot;: false,
                     &quot;pagination&quot;: &quot;datatablePagination&quot;
                   }" role="grid" aria-describedby="datatable_info">
              <thead class="thead-light">
                <tr role="row"><th scope="col" class="table-column-pr-0 sorting_disabled" rowspan="1" colspan="1" style="width: 36.5167px;" aria-label="
                    
                      
                      
                    
                  ">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" class="custom-control-input" type="checkbox">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th><th class="table-column-pl-0 sorting_disabled" rowspan="1" colspan="1" style="width: 221.15px;" aria-label="Full name">Full name</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 117.367px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 145.95px;" aria-label="Type: activate to sort column ascending">Type</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 200.917px;" aria-label="Email">Email</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 121.1px;" aria-label="Signed up: activate to sort column ascending">Signed up</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 98.6px;" aria-label="User ID: activate to sort column ascending">User ID</th></tr>
              </thead>

              <tbody>
                

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                
              <tr role="row" class="odd">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="usersDataCheck2" type="checkbox">
                      <label class="custom-control-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Unassigned</td>
                  <td>amanda@example.com</td>
                  <td>1 year ago</td>
                  <td>67989</td>
                </tr><tr role="row" class="even">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="usersDataCheck3" type="checkbox">
                      <label class="custom-control-label" for="usersDataCheck3"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                        <span class="avatar-initials">A</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Anne Richard</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>anne@example.com</td>
                  <td>6 months ago</td>
                  <td>67326</td>
                </tr><tr role="row" class="odd">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="usersDataCheck4" type="checkbox">
                      <label class="custom-control-label" for="usersDataCheck4"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">David Harrison</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Non-subscription</td>
                  <td>david@example.com</td>
                  <td>6 months ago</td>
                  <td>55821</td>
                </tr><tr role="row" class="even">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="usersDataCheck5" type="checkbox">
                      <label class="custom-control-label" for="usersDataCheck5"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Finch Hoot</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>finch@example.com</td>
                  <td>1 year ago</td>
                  <td>85214</td>
                </tr><tr role="row" class="odd">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="usersDataCheck6" type="checkbox">
                      <label class="custom-control-label" for="usersDataCheck6"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-2">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Bob Dean</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>bob@example.com</td>
                  <td>6 months ago</td>
                  <td>75470</td>
                </tr><tr role="row" class="even">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="usersDataCheck7" type="checkbox">
                      <label class="custom-control-label" for="usersDataCheck7"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>Ella@example.com</td>
                  <td>1 year ago</td>
                  <td>37534</td>
                </tr><tr role="row" class="odd">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="usersDataCheck8" type="checkbox">
                      <label class="custom-control-label" for="usersDataCheck8"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Sam Kart</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>sam@example.com</td>
                  <td>1 year ago</td>
                  <td>57300</td>
                </tr><tr role="row" class="even">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="usersDataCheck9" type="checkbox">
                      <label class="custom-control-label" for="usersDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Costa Quinn</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Unassigned</td>
                  <td>costa@example.com</td>
                  <td>1 year ago</td>
                  <td>71288</td>
                </tr></tbody>
            </table><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 8 of 17 entries</div></div>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom select2-hidden-accessible" data-hs-select2-options="{
                            &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                            &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless&quot;,
                            &quot;dropdownAutoWidth&quot;: true,
                            &quot;width&quot;: true
                          }" data-select2-id="datatableEntries" tabindex="-1" aria-hidden="true">
                    <option value="4" data-select2-id="13">4</option>
                    <option value="6" data-select2-id="14">6</option>
                    <option value="8" selected="" data-select2-id="15">8</option>
                    <option value="12" data-select2-id="16">12</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="12" style=""><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-datatableEntries-container"><span class="select2-selection__rendered" id="select2-datatableEntries-container" role="textbox" aria-readonly="true" title="8"><span>8</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty">17</span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul id="datatable_pagination" class="pagination datatable-custom-pagination"><li class="paginate_item page-item disabled"><a class="paginate_button previous page-link" aria-controls="datatable" data-dt-idx="0" tabindex="0" id="datatable_previous"><span aria-hidden="true">Prev</span></a></li><li class="paginate_item page-item active"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_item page-item"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_item page-item"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_item page-item"><a class="paginate_button next page-link" aria-controls="datatable" data-dt-idx="4" tabindex="0" id="datatable_next"><span aria-hidden="true">Next</span></a></li></ul></div></nav>
                </div>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
        <!-- End Card -->

        <div class="row gx-2 gx-lg-3">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Transactions</h5>

                <!-- Daterangepicker -->
                <button id="js-daterangepicker-predefined" class="btn btn-sm btn-ghost-secondary dropdown-toggle">
                  <i class="tio-date-range"></i>
                  <span class="js-daterangepicker-predefined-preview ml-1">Feb 14 - Feb 14, 2021</span>
                </button>
                <!-- End Daterangepicker -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Chart -->
                <div class="chartjs-custom mx-auto" style="height: 20rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas class="js-chart-datalabels chartjs-render-monitor" data-hs-chartjs-options="{
                            &quot;type&quot;: &quot;bubble&quot;,
                            &quot;data&quot;: {
                              &quot;datasets&quot;: [
                                {
                                  &quot;label&quot;: &quot;Label 1&quot;,
                                  &quot;data&quot;: [
                                    {&quot;x&quot;: 55, &quot;y&quot;: 65, &quot;r&quot;: 99}
                                  ],
                                  &quot;color&quot;: &quot;#fff&quot;,
                                  &quot;backgroundColor&quot;: &quot;rgba(55,125,255,.9)&quot;,
                                  &quot;borderColor&quot;: &quot;transparent&quot;
                                },
                                {
                                  &quot;label&quot;: &quot;Label 2&quot;,
                                  &quot;data&quot;: [
                                    {&quot;x&quot;: 33, &quot;y&quot;: 42, &quot;r&quot;: 65}
                                  ],
                                  &quot;color&quot;: &quot;#fff&quot;,
                                  &quot;backgroundColor&quot;: &quot;rgba(100, 0, 214, 0.8)&quot;,
                                  &quot;borderColor&quot;: &quot;transparent&quot;
                                },
                                {
                                  &quot;label&quot;: &quot;Label 3&quot;,
                                  &quot;data&quot;: [
                                    {&quot;x&quot;: 46, &quot;y&quot;: 26, &quot;r&quot;: 38}
                                  ],
                                  &quot;color&quot;: &quot;#fff&quot;,
                                  &quot;backgroundColor&quot;: &quot;#00c9db&quot;,
                                  &quot;borderColor&quot;: &quot;transparent&quot;
                                }
                              ]
                            },
                            &quot;options&quot;: {
                              &quot;scales&quot;: {
                                &quot;yAxes&quot;: [{
                                  &quot;gridLines&quot;: {
                                    &quot;display&quot;: false
                                  },
                                  &quot;ticks&quot;: {
                                    &quot;display&quot;: false,
                                    &quot;max&quot;: 100,
                                    &quot;beginAtZero&quot;: true
                                  }
                                }],
                                &quot;xAxes&quot;: [{
                                &quot;gridLines&quot;: {
                                    &quot;display&quot;: false
                                  },
                                  &quot;ticks&quot;: {
                                    &quot;display&quot;: false,
                                    &quot;max&quot;: 100,
                                    &quot;beginAtZero&quot;: true
                                  }
                                }]
                              },
                              &quot;tooltips&quot;: false
                            }
                          }" style="display: block; height: 320px; width: 537px;" width="671" height="400"></canvas>
                </div>
                <!-- End Chart -->

                <!-- Legend Indicators -->
                <div class="row justify-content-center">
                  <div class="col-auto">
                    <span class="legend-indicator bg-primary"></span> New
                  </div>

                  <div class="col-auto">
                    <span class="legend-indicator" style="background-color: #7000f2;"></span> Pending
                  </div>

                  <div class="col-auto">
                    <span class="legend-indicator bg-info"></span> Failed
                  </div>
                </div>
                <!-- End Legend Indicators -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-6">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Reports overview</h5>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options="{
                       &quot;target&quot;: &quot;#reportsOverviewDropdown1&quot;,
                       &quot;type&quot;: &quot;css-animation&quot;
                     }" data-hs-unfold-target="#reportsOverviewDropdown1" data-hs-unfold-invoker="">
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="reportsOverviewDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y" data-hs-target-height="247.833" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInUp" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share reports
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-download-to dropdown-item-icon"></i> Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <span class="h1 d-block mb-4">$7,431.14 USD</span>

                <!-- Progress -->
                <div class="progress rounded-pill mb-2">
                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="Gross value"></div>
                  <div class="progress-bar opacity" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="Net volume from sales"></div>
                  <div class="progress-bar opacity-xs" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="New volume from sales"></div>
                </div>

                <div class="d-flex justify-content-between mb-4">
                  <span>0%</span>
                  <span>100%</span>
                </div>
                <!-- End Progress -->

                <!-- Table -->
                <div class="table-responsive">
                  <table class="table table-lg table-nowrap card-table mb-0">
                    <tbody><tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary"></span>Gross value
                      </th>
                      <td>$3,500.71</td>
                      <td>
                        <span class="badge badge-soft-success">+12.1%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary opacity"></span>Net volume from sales
                      </th>
                      <td>$2,980.45</td>
                      <td>
                        <span class="badge badge-soft-warning">+6.9%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary opacity-xs"></span>New volume from sales
                      </th>
                      <td>$950.00</td>
                      <td>
                        <span class="badge badge-soft-danger">-1.5%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator"></span>Other
                      </th>
                      <td>32</td>
                      <td>
                        <span class="badge badge-soft-success">1.9%</span>
                      </td>
                    </tr>
                  </tbody></table>
                </div>
                <!-- End Table -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
      </div>
      <!-- End Content -->

      <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="font-size-sm mb-0">© Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
            </div>
            <div class="col-auto">
              <div class="d-flex justify-content-end">
                <!-- List Dot -->
                <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">FAQ</a>
                  </li>

                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">License</a>
                  </li>

                  <li class="list-inline-item">
                    <!-- Keyboard Shortcuts Toggle -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options="{
                              &quot;target&quot;: &quot;#keyboardShortcutsSidebar&quot;,
                              &quot;type&quot;: &quot;css-animation&quot;,
                              &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                              &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                              &quot;hasOverlay&quot;: true,
                              &quot;smartPositionOff&quot;: true
                             }" data-hs-unfold-target="#keyboardShortcutsSidebar" data-hs-unfold-invoker="">
                        <i class="tio-command-key"></i>
                      </a>
                    </div>
                    <!-- End Keyboard Shortcuts Toggle -->
                  </li>
                </ul>
                <!-- End List Dot -->
              </div>
            </div>
          </div>
        </div>
      

      
      <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated" data-hs-target-height="0" data-hs-unfold-content="" data-hs-unfold-content-animation-in="fadeInRight" data-hs-unfold-content-animation-out="fadeOutRight" style="animation-duration: 300ms;">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Keyboard shortcuts</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options="{
                &quot;target&quot;: &quot;#keyboardShortcutsSidebar&quot;,
                &quot;type&quot;: &quot;css-animation&quot;,
                &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                &quot;hasOverlay&quot;: true,
                &quot;smartPositionOff&quot;: true
               }" data-hs-unfold-target="#keyboardShortcutsSidebar" data-hs-unfold-invoker="">
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="font-weight-bold">Bold</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">b</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <em>italic</em>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">i</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <u>Underline</u>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">u</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <s>Strikethrough</s>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="small">Small text</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <mark>Highlight</mark>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">e</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Mention person <a href="#">(@Brian)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">@</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">+</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <a href="#">#hashtag</a>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">#hashtag</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Date</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/date</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Time</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/time</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Note box</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/note</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find and replace</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">r</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find next</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find previous</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Un-indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line up</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line down</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Add a comment</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">m</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Undo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">z</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Redo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">y</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
              <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Create new doc</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Present</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Share</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Search docs</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">o</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Keyboard shortcuts</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">/</kbd>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Keyboard Shortcuts -->

    <!-- Activity -->
    <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated" data-hs-target-height="0" data-hs-unfold-content="" data-hs-unfold-content-animation-in="fadeInRight" data-hs-unfold-content-animation-out="fadeOutRight" style="animation-duration: 300ms;">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Activity stream</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options="{
              &quot;target&quot;: &quot;#activitySidebar&quot;,
              &quot;type&quot;: &quot;css-animation&quot;,
              &quot;animationIn&quot;: &quot;fadeInRight&quot;,
              &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
              &quot;hasOverlay&quot;: true,
              &quot;smartPositionOff&quot;: true
             }" data-hs-unfold-target="#activitySidebar" data-hs-unfold-invoker="">
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <!-- Step -->
          <ul class="step step-icon-sm step-avatar-sm">
            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Iana Robinson</h5>

                  <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                  <ul class="list-group list-group-sm">
                    <!-- List Item -->
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="./assets/svg/brands/excel.svg" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">12kb</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="./assets/svg/brands/word.svg" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">4kb</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>

                  <small class="text-muted text-uppercase">Now</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-dark">B</span>

                <div class="step-content">
                  <h5 class="mb-1">Bob Dean</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Today</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="h5 mb-1">Crane</h5>

                  <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                  <ul class="list-group list-group-sm">
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="./assets/svg/illustrations/card-1.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="./assets/svg/illustrations/card-2.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="./assets/svg/illustrations/card-3.svg" alt="Image Description">
                        </div>
                        <div class="col-auto align-self-center">
                          <div class="text-center">
                            <a href="#">+2</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <small class="text-muted text-uppercase">May 12</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-info">D</span>

                <div class="step-content">
                  <h5 class="mb-1">David Lidell</h5>

                  <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                  <small class="text-muted text-uppercase">May 15</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Rachel King</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Apr 29</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Finch Hoot</h5>

                  <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                  <small class="text-muted text-uppercase">Apr 06</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                  <span class="step-icon step-icon-soft-primary">
                    <i class="tio-user"></i>
                  </span>

                <div class="step-content">
                  <h5 class="mb-1">Project status updated</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

                  <small class="text-muted text-uppercase">Feb 10</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->
          </ul>
          <!-- End Step -->

          <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-close">
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body p-sm-5">
            <div class="text-center">
              <div class="w-75 w-sm-50 mx-auto mb-4">
                <img class="img-fluid" src="./assets/svg/illustrations/graphs.svg" alt="Image Description">
              </div>

              <h4 class="h1">Welcome to Front</h4>

              <p>We're happy to see you in our community.</p>
            </div>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer d-block text-center py-sm-5">
            <small class="text-cap mb-4">Trusted by the world's best teams</small>

            <div class="w-85 mx-auto">
              <div class="row justify-content-between">
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->

    <!-- Create a new user Modal -->
    <div class="modal fade" id="inviteUserModal" tabindex="-1" role="dialog" aria-labelledby="inviteUserModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="inviteUserModalTitle" class="modal-title">Invite users</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Form Group -->
            <div class="form-group">
              <div class="input-group input-group-merge mb-2 mb-sm-0">
                <div class="input-group-prepend" id="fullName">
                  <span class="input-group-text">
                    <i class="tio-search"></i>
                  </span>
                </div>

                <input class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails" aria-describedby="fullName" type="text">

                <div class="input-group-append input-group-append-last-sm-down-none">
                  <!-- Select -->
                  <div id="permissionSelect" class="select2-custom select2-custom-right">
                    <select class="js-select2-custom custom-select select2-hidden-accessible" size="1" style="opacity: 0;" data-hs-select2-options="{
                              &quot;dropdownParent&quot;: &quot;#permissionSelect&quot;,
                              &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                              &quot;dropdownAutoWidth&quot;: true,
                              &quot;dropdownWidth&quot;: &quot;11rem&quot;
                            }" data-select2-id="17" tabindex="-1" aria-hidden="true">
                      <option value="guest" selected="" data-select2-id="19">Guest</option>
                      <option value="can edit" data-select2-id="20">Can edit</option>
                      <option value="can comment" data-select2-id="21">Can comment</option>
                      <option value="full access" data-select2-id="22">Full access</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="18" style="width: 100%;"><span class="selection"><span class="select2-selection custom-select" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-lb4y-container"><span class="select2-selection__rendered" id="select2-lb4y-container" role="textbox" aria-readonly="true" title="Guest"><span>Guest</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div>
                  <!-- End Select -->

                  <a class="btn btn-primary d-none d-sm-block" href="javascript:;">Invite</a>
                </div>
              </div>

              <a class="btn btn-block btn-primary d-sm-none" href="javascript:;">Invite</a>
            </div>
            <!-- End Form Group -->

            <div class="form-row">
              <h5 class="col modal-title">Invite users</h5>

              <div class="col-auto">
                <a class="d-flex align-items-center font-size-sm text-body" href="#">
                  <img class="avatar avatar-xss mr-2" src="./assets/svg/brands/gmail.svg" alt="Image Description">
                  Import contacts
                </a>
              </div>
            </div>

            <hr class="mt-2">

            <ul class="list-unstyled list-unstyled-py-4">
              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Top endorsed"></i></h5>
                        <span class="d-block font-size-sm">amanda@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect1" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm select2-hidden-accessible" size="1" style="opacity: 0;" data-hs-select2-options="{
                                    &quot;dropdownParent&quot;: &quot;#inviteUserSelect1&quot;,
                                    &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                                    &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless pl-0&quot;,
                                    &quot;dropdownAutoWidth&quot;: true,
                                    &quot;width&quot;: true
                                  }" data-select2-id="23" tabindex="-1" aria-hidden="true">
                            <option value="guest" selected="" data-select2-id="25">Guest</option>
                            <option value="can edit" data-select2-id="26">Can edit</option>
                            <option value="can comment" data-select2-id="27">Can comment</option>
                            <option value="full access" data-select2-id="28">Full access</option>
                            <option value="remove" data-option-template="<span class=&quot;text-danger&quot;>Remove</span>" data-select2-id="29">Remove</option>
                          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="24" style=""><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless pl-0" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-aauw-container"><span class="select2-selection__rendered" id="select2-aauw-container" role="textbox" aria-readonly="true" title="Guest"><span>Guest</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">David Harrison</h5>
                        <span class="d-block font-size-sm">david@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect2" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm select2-hidden-accessible" size="1" style="opacity: 0;" data-hs-select2-options="{
                                    &quot;dropdownParent&quot;: &quot;#inviteUserSelect2&quot;,
                                    &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                                    &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless pl-0&quot;,
                                    &quot;dropdownAutoWidth&quot;: true,
                                    &quot;width&quot;: true
                                  }" data-select2-id="30" tabindex="-1" aria-hidden="true">
                            <option value="guest" selected="" data-select2-id="32">Guest</option>
                            <option value="can edit" data-select2-id="33">Can edit</option>
                            <option value="can comment" data-select2-id="34">Can comment</option>
                            <option value="full access" data-select2-id="35">Full access</option>
                            <option value="remove" data-option-template="<span class=&quot;text-danger&quot;>Remove</span>" data-select2-id="36">Remove</option>
                          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="31" style=""><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless pl-0" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-7pij-container"><span class="select2-selection__rendered" id="select2-7pij-container" role="textbox" aria-readonly="true" title="Guest"><span>Guest</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Top endorsed"></i></h5>
                        <span class="d-block font-size-sm">Markvt@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect4" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm select2-hidden-accessible" size="1" style="opacity: 0;" data-hs-select2-options="{
                                    &quot;dropdownParent&quot;: &quot;#inviteUserSelect4&quot;,
                                    &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                                    &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless pl-0&quot;,
                                    &quot;dropdownAutoWidth&quot;: true,
                                    &quot;width&quot;: true
                                  }" data-select2-id="37" tabindex="-1" aria-hidden="true">
                            <option value="guest" selected="" data-select2-id="39">Guest</option>
                            <option value="can edit" data-select2-id="40">Can edit</option>
                            <option value="can comment" data-select2-id="41">Can comment</option>
                            <option value="full access" data-select2-id="42">Full access</option>
                            <option value="remove" data-option-template="<span class=&quot;text-danger&quot;>Remove</span>" data-select2-id="43">Remove</option>
                          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="38" style=""><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless pl-0" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-2jc2-container"><span class="select2-selection__rendered" id="select2-2jc2-container" role="textbox" aria-readonly="true" title="Guest"><span>Guest</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-3">
                    <span class="avatar-initials">B</span>
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Bob Dean</h5>
                        <span class="d-block font-size-sm">bob@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect3" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm select2-hidden-accessible" size="1" style="opacity: 0;" data-hs-select2-options="{
                                    &quot;dropdownParent&quot;: &quot;#inviteUserSelect3&quot;,
                                    &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                                    &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless pl-0&quot;,
                                    &quot;dropdownAutoWidth&quot;: true,
                                    &quot;width&quot;: true
                                  }" data-select2-id="44" tabindex="-1" aria-hidden="true">
                            <option value="guest" selected="" data-select2-id="46">Guest</option>
                            <option value="can edit" data-select2-id="47">Can edit</option>
                            <option value="can comment" data-select2-id="48">Can comment</option>
                            <option value="full access" data-select2-id="49">Full access</option>
                            <option value="remove" data-option-template="<span class=&quot;text-danger&quot;>Remove</span>" data-select2-id="50">Remove</option>
                          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="45" style=""><span class="selection"><span class="select2-selection custom-select custom-select-sm custom-select-borderless pl-0" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-xlqj-container"><span class="select2-selection__rendered" id="select2-xlqj-container" role="textbox" aria-readonly="true" title="Guest"><span>Guest</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->
            </ul>
          </div>
          <!-- End Body -->

        

   <?php include('footer.php'); ?>