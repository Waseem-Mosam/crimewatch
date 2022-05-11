<?php
//Class to produce an HTML Checkbox
class CheckBox extends DropBox
{

	function tooString()
	{
		$text="<tr>
				<td>".$this->label."</td>
				<td>";
				
				foreach($this->options as $option)
				$text.="<input type='checkbox' name='".$this->name."' value='".$option."'/>".$option."<br/>";			
		$text.="</td>
				</tr>";
		return $text;
	}

}


?>
