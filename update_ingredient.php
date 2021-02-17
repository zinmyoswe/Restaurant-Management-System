<?php
	
	 include('confs/config.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];

   

    $sql = "UPDATE main_ingredient SET main_ingredient_name='$name',modified_date=now() WHERE main_ingredient_id=$id";


    mysqli_query($conn, $sql);  

    echo "<script>window.open('view_ingredient.php?w2=updated','_self')</script>";

?>