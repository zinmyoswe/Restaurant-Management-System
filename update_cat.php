<?php
	
	 include('confs/config.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $menu = $_POST['menu'];
   

    $sql = "UPDATE categories SET cat_name='$name',menu_id='$menu',modified_date=now() WHERE cat_id=$id";


    mysqli_query($conn, $sql);  

    echo "<script>window.open('view_categories.php?w2=updated','_self')</script>";

?>