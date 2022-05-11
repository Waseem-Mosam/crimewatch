<?php
//HOME PAGE
	$p=new Page('Welcome to the Gift Box!');
	$p->setHeading('Welcome to the Gift Box!');
	
	$text="
	
	<h2>Gifts for every occasion!</h2>
	We stock a selection of gifts for any occasion..
	<table>
	<tr>
	<td>Join us</td>
	</tr>
	</table>
	
	";
	
	$p->setContent($text);
	$p->printIt();
?>
