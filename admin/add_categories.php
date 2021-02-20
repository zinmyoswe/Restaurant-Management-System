<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('header.php');
  include('navbar.php');
  include('sidebar.php');

?>

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        
      



      <div class="row gx-2 gx-lg-3">
          <div class="col-lg-12 mb-3 mb-lg-12">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Add Categories</h5>

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
                 

  <?php
          if(isset($_POST['cat'])){
            $name = $_POST['name'];
            $menu = $_POST['menu'];
  
            if($name == null){
                  echo '  <div class="alert alert-danger">
        <i class="fa fa-exclamation-triangle"> </i> Categories Name Required!
        </div>';
                }else{
      $query = $conn->query("INSERT INTO categories(cat_name,menu_id,created_date,modified_date)
      VALUES ('$name','$menu',NOW(),NOW())");
          ?>
      

          <?php
               
             if($query){

        //           echo '  <div class="alert alert-success">
        // <i class="fa fa-check-circle-o"> </i> Category Added Successfully
        // </div>';
  
        echo "<script>window.open('view_categories.php?w2=success','_self')</script>";
                  }
                }
                }
          ?>
 <form method="post" action="" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Category Name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Menu</label>
    <select class="form-control" name="menu" id="exampleFormControlSelect1">
      <option value="0">Choose Menu</option>
      <?php 
         include('confs/config.php');
         $sql = mysqli_query($conn,"SELECT * from menu");
         while($row = mysqli_fetch_assoc($sql)):
      ?>
      <option value="<?php echo $row['menu_id'] ?>"><?php echo $row['menu_name'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>
 
  <button type="submit" name="cat" class="btn btn-primary float-right">Save</button>
  <a href="index.php" class="btn btn-outline-primary float-right md-3">Back</a>
</form>

              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div> <!-- col-lg-5 end -->

        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->



    

    <?php include('footer2.php'); ?>
    <?php include('footer.php'); ?>


    