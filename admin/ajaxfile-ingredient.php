<?php 
include "confs/config.php";

if(isset($_POST['id'])){
	$id = $_POST['id'];

	// Delete record
	$sql = "DELETE FROM main_ingredient WHERE main_ingredient_id=".$id;
	mysqli_query($conn,$sql);
	echo 1;
		exit;
	}

echo 0;
exit;