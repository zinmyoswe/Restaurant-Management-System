<?php 
	include('confs/config.php');
	
	if(isset($_POST['category_id']) && $_POST['category_id'] !='')
	{
		$countryID = $_POST['category_id'];
		$sql = "select distinct c.*,m.menu_id,m.menu_name from categories c
		left join menu m
		on m.menu_id = c.menu_id
		and c.cat_id = '".$countryID."' order by m.menu_name DESC";
		$rs = mysqli_query($conn,$sql);
		$numRows = mysqli_num_rows($rs);
		
		if($numRows == 0)
		{
			echo '<option>No Sub Category found</option>';
		}
		else
		{
			
			while($cities = mysqli_fetch_assoc($rs))
			{
				echo '<option value="'.$cities['menu_id'].'">'.$cities['menu_name'].'</option>';
			}
			
		}
		
	}

?>