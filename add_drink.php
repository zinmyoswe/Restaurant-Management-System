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
                <h5 class="card-header-title">Add Drink</h5>

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
                 

 <!-- form start -->
            <form class="form-horizontal" method="post" action="add_drink.php" enctype="multipart/form-data">
        

              <div class="form-group">
          <label for="exampleInputEmail1">Drink Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Food Name">
            </div>

                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3">Main Ingredient</label>
              
                  <select id="ingredient" class="form-control" name="ingredient">
                                                <option>Choose an main Ingredient</option>
                                               <?php 
                                                $get_ingredient = "SELECT * FROM main_ingredient";
                                                $run_ingredient = mysqli_query($conn,$get_ingredient);
                                                while($row_ingredient= mysqli_fetch_array($run_ingredient)){
                                                  $id = $row_ingredient['main_ingredient_id'];
                                                  $name = $row_ingredient['main_ingredient_name'];

                                                  echo "
                                                    <option value='$id'>$name</option>
                                                  ";
                                                }
                                                ?>
                                          </select>  
                                         </div>
                                             <!-- FORM END -->
                            
                         <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" >Price</label>
                  <input type="text" name="price"  class="form-control" id="inputEmail3" placeholder="Price"/>            
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3">Category</label>
              
                  <select id="cat" class="form-control" name="cat">
                                                <option>Choose a Category</option>
                                               <?php 
                                                $get_cat = "SELECT * FROM categories";
                                                $run_cat = mysqli_query($conn,$get_cat);
                                                while($row_cat= mysqli_fetch_array($run_cat)){
                                                  $id = $row_cat['cat_id'];
                                                  $name = $row_cat['cat_name'];

                                                  echo "
                                                    <option value='$id'>$name</option>
                                                  ";
                                                }
                                                ?>
                                          </select>  
                                         </div>
                                             <!-- FORM END -->

                <div class="form-group">
                 <label for="inputEmail3">Menu</label>
                    
                      <select class="form-control" name="menu_id" id="cities-container">
                        <!-- <option id="cities-container"></option> -->
                              
                      </select>
                  </div>
                <!-- FORM ENDS -->

                

                 <div class="form_group">
                            <label for="inputEmail3" >Image</label>
                  <div class="col-sm-10">
                            <input type="file" name="cover">
                            </div>
                            </div>
                            <!-- FORM ENDS -->
                            <br>
                             <button type="submit" name="submit" class="btn btn-primary float-right" style="margin: 0 4px">Save</button>
                <a href="view_food.php" class="btn btn-outline-primary float-right" >Back</a>
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

   <!--  <script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->

<script type="text/javascript">
  $(document).ready(function(){
    $("#cat").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $("#cities-container").html("");
        
        $.ajax({
          type:'post',
          data:{category_id:getCountryID},
          url: 'ajax_request_cat_and_menu2.php',
          success:function(returnData){
            $("#loader").hide();  
            $("#cities-container").html(returnData);
          }
        }); 
      }
      
    })
  });
</script>


<?php

    if(isset($_POST['submit'])){

      $name = $_POST['name'];
      $ingredient = $_POST['ingredient'];
      $price = $_POST['price'];
      $cat = $_POST['cat'];
      $menu_id = $_POST['menu_id'];
      $cover = $_FILES['cover']['name'];
      $tmp = $_FILES['cover']['tmp_name'];
     

      // $product_image2 = $_FILES['product_image2']['name'];
      // $tmp2 = $_FILES['product_image2']['tmp_name'];

      // $product_image3 = $_FILES['product_image3']['name'];
      // $tmp3 = $_FILES['product_image3']['tmp_name'];

      
      // move_uploaded_file($tmp,"cover/$product_image");
      // move_uploaded_file($tmp2,"cover/$product_image2");
      // move_uploaded_file($tmp3,"cover/$product_image3");
      
      if($cover){
        move_uploaded_file($tmp, "cover/$cover");

      }
      
    
      $sql = "INSERT INTO food(food_name,main_ingredient_id,price,category_id,menu_id,created_by,cover,created_date,modified_date)
                   VALUES('$name','$ingredient','$price','$cat','$menu_id','zinmyo','$cover',now(),now())";

      $run=mysqli_query($conn,$sql);
      
      if($run){

        // echo "<script>alert('Product has been inserted')</script>";
        echo "<script>window.open('view_drink.php?w2=success','_self')</script>";
      }
      else{
        echo "error";
      }

    
    }
?>


    