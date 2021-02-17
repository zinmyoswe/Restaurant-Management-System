<?php
	 include('confs/config.php');
	$query = "SELECT f.*,c.cat_id,c.cat_name,m.menu_id, m.menu_name from food f 
                LEFT JOIN categories c 
                ON c.cat_id = f.category_id
                LEFT JOIN menu m 
                ON m.menu_id = f.menu_id 
                where f.menu_id = 2";
	$result = mysqli_query($conn, $query);

	//count the total records

	$total_posts = mysqli_num_rows($result);

	//Using ceil function to divide the total records on per page

	$total_pages = ceil($total_posts / $per_page);

	//Going to first page

	echo"
	<nav aria-label='Contacts Page Navigation'>
	<ul class='pagination justify-content-center m-0'>
	<li class='page-item'><a class='page-link' href ='view_drink.php?page=1'>&laquo;</a></li>

	";

	for ($i= 1; $i<=$total_pages; $i++){
		echo "<li class='page-item'><a class='page-link' href='view_drink.php?page=$i'>$i</a></li>";
	}

	//Going to last page

	echo "<li class='page-item'><a class='page-link' href='view_drink.php?page=$total_pages'>&raquo;</a></li></ul>
		</nav>

	";


?>



