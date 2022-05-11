<?php
//Textbox class

class TextBox
{
	protected $name;
	protected $label;
	protected $default;
	private $isPassword=FALSE;
	private $isSticky=TRUE;
	
	function __construct($n,$l)
	{
		$this->name=$n;
		$this->label=$l;
	}
	
	function setIsPassword($v)
	{
		$this->isPassword=$v;
	}
	function setIsSticky($v)
	{
		$this->isSticky=$v;
	}
	
	function tooString()
	{
		$text="	<tr>
				<td>".$this->label."</td>
				<td><input name='".$this->name."' ";
		//check if this is a password textbox		
		if($this->isPassword)
			$text.="type='password' ";
		else
			$text.="type='text' ";
		//check if the for element has been completed
		if(isset($_POST[$this->name])& !($this->isPassword) &($this->isSticky))
			$text.=" value='".$_POST[$this->name]."' ";
			
		$text.="'/></td>
				</tr>";
		return $text;
	}

}


?>