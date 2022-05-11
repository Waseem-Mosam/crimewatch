<?php
//PRODUCTS MODULE
//Displays all the available products
	$i=new Inventory();
	$products=$i->getAllMediums();
	$text="<table id='product_list'>";
	foreach($products as $product)
		{
		$prod=new Medium($product);
		$text.="<tr><td><img src='images/mediums/".$product.".jpg' width='100'/></td>
					<td>".$prod->tooString()."</td></tr>";
		}
	$text.="</table>";
		
	$p=new Page('Products');
	$p->setHeading('Products Range');
	$p->setContent($text);
	$p->printIt();
?>
