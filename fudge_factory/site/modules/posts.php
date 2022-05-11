<?php
//PRODUCTS MODULE
//Displays all the available products
	
	include("connection.php");
	
	//Construct membership form
	$f=new Form('posts_form');
	$f->addTextBox('name', 'First Name');
	$c_array=array('Rape','Murder','Theft','Arson','Pick Pocket','Mugging');
	$d=new DropBox('posts', 'Posts',$c_array);
	$f->addElement($d);
    $f->addTextBox('area', 'Area of Crime');
	$f->addTextBox('date', 'Date DD/MM/YY');
	$f->addTextBox('time', 'Time HH:MM');
	$f->setSubmitLabel('Add Crime Report');
	$f->setAction('index.php?mod=posts');
	$form_text=$f->tooString();