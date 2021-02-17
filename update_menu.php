<?php
	
	 include('confs/config.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mod = 'zinmyo2';

   

    $sql = "UPDATE menu SET menu_name='$name',modified_by='$mod',modified_date=now() WHERE menu_id=$id";


    mysqli_query($conn, $sql);  

    echo "<script>window.open('view_menu.php?w2=updated','_self')</script>";

?>