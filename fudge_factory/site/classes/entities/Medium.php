<?php
include("modules/connection.php");
class Medium
{
	private $id;
	private $price;
	private $description;
	
	function __construct($id)
	{
		$this->id=$id;
		
		$query='SELECT * FROM MEDIUM WHERE medium_id='.$id;
		$result=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result))
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
