
<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered default navbar-vertical-aside-initialized">
  <div class="navbar-vertical-container">
    <div class="navbar-vertical-footer-offset">
      <div class="navbar-brand-wrapper justify-content-between">
        <!-- Logo -->
        
        
          <a class="navbar-brand" href="index.php" aria-label="Front">
            <img class="navbar-brand-logo" src="https://htmlstream.com/front-dashboard/assets/svg/logos/logo.svg" alt="Logo">
            <img class="navbar-brand-logo-mini" src="https://htmlstream.com/front-dashboard/assets/svg/logos/logo-short.svg" alt="Logo">
          </a>
        
        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
          <i class="tio-clear tio-lg"></i>
        </button>
        <!-- End Navbar Vertical Toggle -->
      </div>

      <!-- Content -->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav navbar-nav-lg nav-tabs">
          <!-- Dashboards -->
          <li class="navbar-vertical-aside-has-menu show">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle active" href="javascript:;" title="Dashboards">

              <i class="fal fa-home nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display: block;">
              <li class="nav-item">
                <a class="nav-link active" href="./index.html" title="Default">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Default</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="./dashboard-alternative.html" title="Alternative">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Alternative</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Dashboards -->

          <li class="nav-item">
            <small class="nav-subtitle" title="Pages">Pages</small>
            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
          </li>

       <!--   ------------------------- Manage table start ----------------------- -->
 
          <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         


              <i class="fal fa-burger-soda nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Manage Table <span class="badge badge-info badge-pill ml-1">4</span></span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_table.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Table</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_table.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Table </span>
                </a>
              </li>
             
            </ul>
          </li>
         
        <!--   ------------------------- Manage table end ----------------------- -->

        <!--   ------------------------- Manage Food start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
            <?php 
                  include('confs/config.php');
                    $sql_p = "SELECT f.*,c.cat_id,c.cat_name,m.menu_id, m.menu_name from food f 
                LEFT JOIN categories c 
                ON c.cat_id = f.category_id
                LEFT JOIN menu m 
                ON m.menu_id = f.menu_id 
                where f.menu_id = 1";
                    $run_p = mysqli_query($conn,$sql_p);
                    $count_p = mysqli_num_rows($run_p);       
                ?>


              <i class="fal fa-soup nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Manage Food <span class="badge badge-info badge-pill ml-1"><?php echo $count_p; ?></span></span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_food.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Food</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_food.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Food </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Food end ----------------------- -->

         <!--   ------------------------- Manage Drink start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
              <?php 
                  include('confs/config.php');
                    $sql_d = "SELECT f.*,c.cat_id,c.cat_name,m.menu_id, m.menu_name from food f 
                LEFT JOIN categories c 
                ON c.cat_id = f.category_id
                LEFT JOIN menu m 
                ON m.menu_id = f.menu_id 
                where f.menu_id = 2";
                    $run_d = mysqli_query($conn,$sql_d);
                    $count_d = mysqli_num_rows($run_d);       
                ?>


              <i class="fal fa-glass-citrus nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Manage Drink <span class="badge badge-info badge-pill ml-1"><?php echo $count_d; ?></span></span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_drink.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Drink</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_drink.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Drink </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Drink end ----------------------- -->

         <!--   ------------------------- Manage Order start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         

              <i class="fal fa-shopping-bag nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Manage Order </span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="manage_order.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Manage Order</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Pending Order </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Order end ----------------------- -->
        

         <!--   ------------------------- Manage Staff start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         


              <i class="fal fa-users nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Manage Staff </span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_staff.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Staff</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_staff.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Staff </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Staff end ----------------------- -->

         <!--   ------------------------- Manage Categories start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         


              <i class="fal fa-box nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Manage Categories </span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_categories.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Categories</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_categories.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Categories </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Categories end ----------------------- -->

         <!--   ------------------------- Manage Supplier start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         


              <i class="fal fa-people-carry nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Manage Supplier </span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_supplier.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Supplier</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_supplier.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Supplier </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Supplier end ----------------------- -->

        <!--   ------------------------- Manage Coupon and Discount start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         


              <i class="fal fa-percent nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Coupon & Discount </span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_coupon.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Coupon & Discount</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_coupon.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Coupon & Discount </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Coupon and Discount end ----------------------- -->

        <!--   ------------------------- Manage Report start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         


              <i class="fal fa-file-pdf nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Manage Report </span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_sale_report.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Sale Report</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="view_supplier_report.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Supplier Report </span>
                </a>
              </li>

               <li class="nav-item">
                <a class="nav-link " href="view_supplier_report.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Top 10 Food Sale Report</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="view_supplier_report.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Top 10 Drink Sale Report</span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Report end ----------------------- -->



        <!--   ------------------------- Manage Main Ingredient start ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         


              <i class="fal fa-corn nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"> Main Ingredient </span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_ingredient.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Main Ingredient</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_ingredient.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Main Ingredient </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Main Ingredient end ----------------------- -->

         <!--   ------------------------- Manage Menu ----------------------- -->
<li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
         


              <i class="fal fa-book nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"> Manage Menu </span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="view_menu.php" title="Kanban">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">View Menu</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add_menu.php" title="Calendar">
                  <span class="fas fa-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Add Menu </span>
                </a>
              </li>
             
            </ul>
          </li>
        <!--   ------------------------- Manage Menu end ----------------------- -->

        
          

           


         

          <li class="nav-item ">
            <a class="js-nav-tooltip-link nav-link " href="./welcome-page.html" title="" data-placement="left" data-original-title="Welcome page">
              <i class="tio-visible-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Welcome Page</span>
            </a>
          </li>

          <li class="nav-item">
            <small class="nav-subtitle" title="Layouts">Layouts</small>
            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
          </li>

          <li class="nav-item ">
            <a class="js-nav-tooltip-link nav-link " href="./layouts/layouts.html" title="" data-placement="left" data-original-title="Layouts">
              <i class="tio-dashboard-vs-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Layouts</span>
            </a>
          </li>

          <li class="nav-item">
            <div class="nav-divider"></div>
          </li>

          <li class="nav-item">
            <small class="nav-subtitle" title="Documentation">Documentation</small>
            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
          </li>

          <li class="nav-item ">
            <a class="js-nav-tooltip-link nav-link" href="./documentation/index.html" title="" data-placement="left" data-original-title="Documentation">
              <i class="tio-book-opened nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Documentation <span class="badge badge-primary badge-pill ml-1">v1.1</span></span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="js-nav-tooltip-link nav-link" href="./documentation/typography.html" title="" data-placement="left" data-original-title="Components">
              <i class="tio-layers-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Components</span>
            </a>
          </li>

          <li class="nav-item">
            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
          </li>

          <!-- Front Builder -->
          <li class="nav-item nav-footer-item ">
            <a class="d-none d-md-flex js-hs-unfold-invoker nav-link nav-link-toggle" href="javascript:;" data-hs-unfold-options="{
                 &quot;target&quot;: &quot;#styleSwitcherDropdown&quot;,
                 &quot;type&quot;: &quot;css-animation&quot;,
                 &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                 &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                 &quot;hasOverlay&quot;: true,
                 &quot;smartPositionOff&quot;: true
               }" data-hs-unfold-target="#styleSwitcherDropdown" data-hs-unfold-invoker="">
              <i class="tio-tune nav-icon"></i>
            </a>
            <a class="d-flex d-md-none nav-link nav-link-toggle" href="javascript:;">
              <i class="tio-tune nav-icon"></i>
            </a>
          </li>
          <!-- End Front Builder -->

          <!-- Help -->
          <li class="navbar-vertical-aside-has-menu nav-footer-item ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Help">
              <i class="tio-home-vs-1-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Help</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link" href="#" title="Resources &amp; tutorials">
                  <i class="tio-book-outlined dropdown-item-icon"></i> Resources &amp; tutorials
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Keyboard shortcuts">
                  <i class="tio-command-key dropdown-item-icon"></i> Keyboard shortcuts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Connect other apps">
                  <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="What's new?">
                  <i class="tio-gift dropdown-item-icon"></i> What's new?
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Contact support">
                  <i class="tio-chat-outlined dropdown-item-icon"></i> Contact support
                </a>
              </li>
            </ul>
          </li>
          <!-- End Help -->

          <!-- Language -->
          <li class="navbar-vertical-aside-has-menu nav-footer-item ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Language">
              <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Language</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link" href="#" title="English (US)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                  English (US)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="English (UK)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                  English (UK)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Deutsch">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                  Deutsch
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Dansk">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                  Dansk
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Italiano">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                  Italiano
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="中文 (繁體)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                  中文 (繁體)
                </a>
              </li>
            </ul>
          </li>
          <!-- End Language -->
        </ul>
      </div>
      <!-- End Content -->

      <!-- Footer -->
      <div class="navbar-vertical-footer">
        <ul class="navbar-vertical-footer-list">
          <li class="navbar-vertical-footer-list-item">
            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options="{
                  &quot;target&quot;: &quot;#styleSwitcherDropdown&quot;,
                  &quot;type&quot;: &quot;css-animation&quot;,
                  &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                  &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                  &quot;hasOverlay&quot;: true,
                  &quot;smartPositionOff&quot;: true
                 }" data-hs-unfold-target="#styleSwitcherDropdown" data-hs-unfold-invoker="">
                <i class="tio-tune"></i>
              </a>
            </div>
            <!-- End Unfold -->
          </li>

          <li class="navbar-vertical-footer-list-item">
            <!-- Other Links -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options="{
                  &quot;target&quot;: &quot;#otherLinksDropdown&quot;,
                  &quot;type&quot;: &quot;css-animation&quot;,
                  &quot;animationIn&quot;: &quot;slideInDown&quot;,
                  &quot;hideOnScroll&quot;: true
                 }" data-hs-unfold-target="#otherLinksDropdown" data-hs-unfold-invoker="">
                <i class="tio-help-outlined"></i>
              </a>

              <div id="otherLinksDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated" data-hs-target-height="280.633" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInDown" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
                <span class="dropdown-header">Help</span>
                <a class="dropdown-item" href="#">
                  <i class="tio-book-outlined dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-command-key dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Keyboard shortcuts">Keyboard shortcuts</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-alt dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Connect other apps">Connect other apps</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-gift dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="What's new?">What's new?</span>
                </a>
                <div class="dropdown-divider"></div>
                <span class="dropdown-header">Contacts</span>
                <a class="dropdown-item" href="#">
                  <i class="tio-chat-outlined dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Contact support">Contact support</span>
                </a>
              </div>
            </div>
            <!-- End Other Links -->
          </li>

          <li class="navbar-vertical-footer-list-item">
            <!-- Language -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options="{
                  &quot;target&quot;: &quot;#languageDropdown&quot;,
                  &quot;type&quot;: &quot;css-animation&quot;,
                  &quot;animationIn&quot;: &quot;slideInDown&quot;,
                  &quot;hideOnScroll&quot;: true
                 }" data-hs-unfold-target="#languageDropdown" data-hs-unfold-invoker="">
                <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
              </a>

              <div id="languageDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated" data-hs-target-height="262.717" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInDown" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
                <span class="dropdown-header">Select language</span>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="English">English (US)</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="English">English (UK)</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="Deutsch">Deutsch</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="Dansk">Dansk</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="Italiano">Italiano</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="中文 (繁體)">中文 (繁體)</span>
                </a>
              </div>
            </div>
            <!-- End Language -->
          </li>
        </ul>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</aside><div class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-mobile-overlay"></div>
    
      <script src="https://htmlstream.com/front-dashboard/assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
    
