<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('header.php');
  include('navbar.php');
  include('sidebar.php');
$w2 = $_GET['w2'];
?>



<style type="text/css">
     .modal-dialog{
            margin-top: 250px;
        }
        .btn-secondary {
    color: #fff;
    background-color: black;
    border-color: black;
}
</style>

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
  title: 'Drink added successfully'
}).then(function() {
            window.location = "view_drink.php";
        });
 </script>
<?php } elseif($w2 == 'updated'){ ?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       <script type="text/javascript">
            
            Swal.fire({
              icon: 'success',
              title: 'Updated',
              text: 'Drink updated successfully'
            }).then(function() {
            window.location = "view_drink.php";
        });     
                     
          </script>
<?php } ?>

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        
      



      <div class="row gx-2 gx-lg-3">
          <div class="col-lg-12 mb-3 mb-lg-12">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Manage Drink</h5>

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
                <a href="add_drink.php" class="btn btn-dark">Add New Drink</a>

                 <br><br>

            <table class='table' >
                <tr style='background: light; color: black;'>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                     <th>Created/Modified By</th>
                     <th>Created/Modified Date</th>
                     
                       <th></th>
                </tr>



                <?php 
                include('confs/config.php');

                $per_page = 6;

                if(isset($_GET['page'])){
                  $page = $_GET['page'];
                }

                else{
                  $page = 1;
                }

                $start_from = ($page-1) * $per_page;
                $query = "SELECT f.*,c.cat_id,c.cat_name,m.menu_id, m.menu_name from food f 
                LEFT JOIN categories c 
                ON c.cat_id = f.category_id
                LEFT JOIN menu m 
                ON m.menu_id = f.menu_id 
                where f.menu_id = 2
                ORDER BY 1 DESC LIMIT $start_from, $per_page";
                $result = mysqli_query($conn,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['food_id'];
                    $food_name = $row['food_name'];
                    // $menu = $row['menu'];
                    // $menu_name = $row['menu_name'];
                    $created_date = $row['created_date'];

                ?>
                
                    <tr>
                        <td align='center'><?= $count ?></td>

                        <td><a href="detail_drink.php?id=<?php echo $row['food_id']?>"><?= $food_name ?></a></td>
                         <td><?php echo $row['cat_name'] ?></td> 

                        <td><?php echo $row['price'] ?> Ks</td>
                        <td><?php echo $row['created_by'] ?></td>
                        <td><i class="fal fa-alarm-clock"></i> <?= $created_date ?></td>
                           <td><img src="cover/<?php echo $row['cover'] ?>" width="200"></td>
                       
                        <td align='center' width="200">
                            <a href="edit_drink.php?id=<?php echo $row['food_id']?>" class="btn btn-outline-primary">Edit</a>
                       

                            <button class='delete btn btn-outline-dark' id='del_<?= $id ?>' data-id='<?= $id ?>'>Delete</button>

                        </td>
                        
                    </tr>
                <?php
                    $count++;
                }
                ?>
     </table>

     <style type="text/css">
          .pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {
    z-index: 2;
    color: black;
    background-color: whitesmoke;
    border-color: whitesmoke;
}
        </style>
        <!-- /.box-body -->
        <div class="card-footer">
          <?php include("pagination_drink.php"); ?>
        </div>
        <!-- /.box-footer-->
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
      
           <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
        <script src='script-drink.js' type='text/javascript'></script>


    <?php include('footer.php'); ?>


    