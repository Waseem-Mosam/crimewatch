<?php
//Form Class
class Form
{
	private $name;
	private $elements=array();
	private $id;
	private $action;
	private $method='POST';
	private $submit_label;
	
	function __construct($n)
	{
		$this->name=$n;
	}
	
	function addElement($e)
	{
		$this->elements[]=$e;
	}
	
	function addTextBox($n,$l)
	{
		$t=new TextBox($n,$l);
		$this->elements[]=$t;
	}
	
	function setSubmitLabel($s)
	{
		$this->submit_label=$s;
	}
	
	function setAction($s)
	{
		$this->action=$s;
	}
	
	function tooString()
	{
		$text="
		<form name='".$this->name."' 
				action='".$this->action."' 
				method='".$this->method."'>
		<table>";
		
		foreach($this->elements as $element)
		{
			$text.=$element->tooString();
		}
			
		$text.="</table>
				<input type='hidden' name='submitted' value='TRUE'/>
				<input type='submit' value='".$this->submit_label."'/>
				</form>";
		return $text;
	}


}


?>
