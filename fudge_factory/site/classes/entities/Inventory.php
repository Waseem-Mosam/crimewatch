<?php

class Inventory
{
	function getAllMediums()
	{
	$dbc=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Failed'.mysql_error());
	mysql_select_db(DB_NAME);
	$query='SELECT medium_id FROM MEDIUM';
	$result=mysql_query($query);
	$ids=array();
	if($result)
		while($row=mysql_fetch_array($result))
			{
			$ids[]=$row['medium_id'];
			}
	return $ids;
	}

}
