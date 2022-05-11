<?php
include("modules/connection.php");
class Inventory
{
	function getAllMediums()
	{
	
	$query='SELECT medium_id FROM MEDIUM';
	$result=mysqli_query($con,$query);
	$ids=array();
	if($result)
		while($row=mysqli_fetch_array($result))
			{
			$ids[]=$row['medium_id'];
			}
	return $ids;
	}

}
