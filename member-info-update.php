<?php 
 
 	include 'includes/dbconnect.php';
 	
	

		if ($_POST['city'] != '' && $_POST['area_road'] != '' && $_POST['house'] != '') 
		{							
			$sql= 'UPDATE member_info SET mi_city = "'.$_POST['city'].'", mi_area_road = "'.$_POST['area_road'].'", mi_house = "'.$_POST['house'].'"';
			mysql_query($sql);
			header('location: member-info.php?id=success');
			
		}
		
						
	
							
							


 ?>