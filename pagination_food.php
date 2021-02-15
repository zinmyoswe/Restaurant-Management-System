<?php
	 include('confs/config.php');
	$query = "select * from food";
	$result = mysqli_query($conn, $query);

	//count the total records

	$total_posts = mysqli_num_rows($result);

	//Using ceil function to divide the total records on per page

	$total_pages = ceil($total_posts / $per_page);

	//Going to first page

	echo"
	<nav aria-label='Contacts Page Navigation'>
	<ul class='pagination justify-content-center m-0'>
	<li class='page-item'><a class='page-link' href ='view_food.php?page=1'>&laquo;</a></li>

	";

	for ($i= 1; $i<=$total_pages; $i++){
		echo "<li class='page-item'><a class='page-link' href='view_food.php?page=$i'>$i</a></li>";
	}

	//Going to last page

	echo "<li class='page-item'><a class='page-link' href='view_food.php?page=$total_pages'>&raquo;</a></li></ul>
		</nav>

	";


?>



