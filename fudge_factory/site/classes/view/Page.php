<?php
class Page
{
	private $title='The Fudge Factory';
	private $metacontent='A range of fudge products for sale.';
	private $metakeywords='fudge, gifts, south africa';
	private $heading;
	private $content;
	
	function __construct($t)
		{
			$this->title=$t;		
		}
		
	function printIt()
		{
			include('templates/page.php');
		}
	
	function setTitle($t)
		{
			$this->title=$t;
		}
		
	function setHeading($h)
		{
			$this->heading=$h;
		}
		
	function setContent($c)
		{
			$this->content=$c;
		}
}

?>
