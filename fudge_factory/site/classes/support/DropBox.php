<?php
//Class to produce an HTML DD Box

class DropBox extends TextBox
{
	protected $options=array();
	
	function __construct($n,$l,$options)
	{
		$this->name=$n;
		$this->label=$l;
		$this->options=$options;
	}
	
	function tooString()
	{
		$text="<tr>
				<td>".$this->label."</td>
				<td>
				<select name='".$this->name."'>";
				//add options to box
				foreach($this->options as $option)
				$text.="<option value='".$option."'>".$option."</option>";			
		$text.="</select>
				</td>
				</tr>";
		return $text;
	}
	
	


}

?>
