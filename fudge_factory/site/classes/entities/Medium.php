<?php

class Medium
{
	private $id;
	private $price;
	private $description;
	
	function __construct($id)
	{
		$this->id=$id;
		$dbc=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Failed'.mysql_error());
		mysql_select_db(DB_NAME);
		$query='SELECT * FROM MEDIUM WHERE medium_id='.$id;
		$result=mysql_query($query);
			while($row=mysql_fetch_array($result))
				{
				$this->description=$row['description'];
				$this->price=$row['price'];
				}
		mysql_close();		
	}
	
	function setPrice($price)
	{
		$this->price=$price;	
	}
	
	function setDescription($des)
	{
		$this->description=$des;	
	}
	
	function getPrice()
	{
		return $this->price;	
	}
	
	function getDescription()
	{
		return $this->description;	
	}
	
	function tooString()
	{
		$text=	"<h2>".$this->description."</h2>
				Price: R ".number_format($this->price,2);
		return $text;			
	}

}


?>
