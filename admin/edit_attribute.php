<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('header.php');
  include('navbar.php');
  include('sidebar.php');

  $id = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM attribute WHERE attribute_id=$id ");
  $row = mysqli_fetch_assoc($result);
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
                <h5 class="card-header-title">Edit Attribute</h5>

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

      include('confs/config.php');
      $id = $_GET['id'];
      $result = mysqli_query($conn,"SELECT * FROM attribute WHERE attribute_id=$id");
      $row = mysqli_fetch_assoc($result);

      if(isset($_POST['update'])){
      $id = $_POST['id'];
      $name = $_POST['name'];
    
    
      $sql = "UPDATE attribute SET attribute_name='$name',modified_date=now() 
          WHERE attribute_id = $id ";

      mysqli_query($conn,$sql);

      ?>
        <script>
        // alert('Successfully Updated ...');
        window.location.href='view_attribute.php?w2=updated';
        </script>
      <?php
    }
      ?>     
                 

 <form method="POST" action="" enctype="multipart/form-data">

  <input type="hidden" name="id" value="<?php echo $row['attribute_id']?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Attribute Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value="<?php echo $row['attribute_name']?>">

  </div>
  
 
  <button type="submit" name="update" class="btn btn-dark float-right">Update</button>
  <a href="view_ingredient.php" class="btn btn-outline-dark float-right md-3">Back</a>
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


    