<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('header.php');
  include('navbar.php');
  include('sidebar.php');

  $id = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM food WHERE food_id=$id ");
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
                <h5 class="card-header-title">Edit Drink</h5>

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
      $result = mysqli_query($conn,"SELECT * FROM food WHERE food_id=$id");
      $row = mysqli_fetch_assoc($result);

      if(isset($_POST['update'])){
      $id = $_POST['id'];
      $name = $_POST['name'];
      $ingredient = $_POST['ingredient'];
      $price = $_POST['price'];
      $cat = $_POST['cat'];
      $menu = $_POST['menu'];
     
      $cover = $_FILES['cover']['name'];
      $tmp = $_FILES['cover']['tmp_name'];
     
     
      if($cover){
        move_uploaded_file($tmp, "cover/$cover");
      }
      else{
        $cover = $row['cover'];
      }
      
    
      $sql = "UPDATE food SET food_name='$name',main_ingredient_id='$ingredient',price='$price',category_id='$cat',menu_id='$menu',created_by='zinmyo',cover='$cover',modified_date=now() 
          WHERE food_id = $id ";

      mysqli_query($conn,$sql);

      ?>
        <script>
        // alert('Successfully Updated ...');
        window.location.href='view_drink.php?w2=updated';
        </script>
      <?php
    }
      ?>
                 
  <div class="form-group">
    <label for="exampleInputEmail1">Drink ID</label>
   <input type="text"  value="<?php echo $row['food_id']?>" class="form-control" disabled/>

  </div>
  
 <form method="POST" action="" enctype="multipart/form-data">

  <input type="hidden" name="id" value="<?php echo $row['food_id']?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Drink Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value="<?php echo $row['food_name']?>">

  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Main Ingredient </label>
    <select class="form-control" name="ingredient" id="exampleFormControlSelect1">

      <option>Choose an Ingredient</option>
      <?php 
         include('confs/config.php');
         $main = mysqli_query($conn,"SELECT * from main_ingredient");
         while($mm2 = mysqli_fetch_assoc($main)):
      ?>
      <option value="<?php echo $mm2['main_ingredient_id'] ?>"
        <?php if($mm2['main_ingredient_id'] ==$row['main_ingredient_id']) echo "selected" ?>>
        <?php echo $mm2['main_ingredient_name'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" name="price" class="form-control" id="exampleInputEmail1"  value="<?php echo $row['price']?>">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select class="form-control" name="cat" id="exampleFormControlSelect1">

      <option>Choose a Category</option>
      <?php 
         include('confs/config.php');
         $cat = mysqli_query($conn,"SELECT * from categories");
         while($mm3 = mysqli_fetch_assoc($cat)):
      ?>
      <option value="<?php echo $mm3['cat_id'] ?>"
        <?php if($mm3['cat_id'] ==$row['category_id']) echo "selected" ?>>
        <?php echo $mm3['cat_name'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Menu</label>
    <select class="form-control" name="menu" id="exampleFormControlSelect1">

      <option>Choose Menu</option>
      <?php 
         include('confs/config.php');
         $menu = mysqli_query($conn,"SELECT * from menu");
         while($mm = mysqli_fetch_assoc($menu)):
      ?>
      <option value="<?php echo $mm['menu_id'] ?>"
        <?php if($mm['menu_id'] ==$row['menu_id']) echo "selected" ?>>
        <?php echo $mm['menu_name'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>

   <!-- FORM ENDS -->
                
                 <div class="form_group">
                            <label for="inputEmail3">Image</label>

                  <div class="col-sm-10">
                  <img src="cover/<?php echo $row['cover']?>" alt="" height="150" width="150">
                            <input type="file" name="cover">
                            </div>
                            </div>
                            <!-- FORM ENDS -->
 

  <button type="submit" name="update" class="btn btn-dark float-right">Update</button>
  <a href="view_food.php" class="btn btn-outline-dark float-right md-3">Back</a>
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


    