<?php
//PRODUCTS MODULE
//Displays all the available products
	
	include("connection.php");
	
	//Construct membership form
	$f=new Form('post_form');
	$f->addTextBox('name', 'First Name');
	$c_array=array('Assault','Robbery','Arson','Pick Pocket','Murder','Kidnapping','Other (Specify in Decscription)');
	$d=new DropBox('crime', 'Crime',$c_array);
	$f->addElement($d);
	$f->addTextBox('date', 'Date DD-MM-YY');
	$f->addTextBox('time', 'Time HH:MM');
	$l_array=array('Tlokweng','Mogoditsane','Block 8','Phakalane','Mokolodi','Phase 4','Other (Specify in Decscription)');
	$d=new DropBox('location', 'Location',$l_array);
	$f->addElement($d);
	$f->addTextBox('desc', 'Description');
	$f->setSubmitLabel('Add crime post');
	$f->setAction('index.php?mod=add_posts');
	$form_text=$f->tooString();
	
	
	if(isset($_POST['submitted']))
	{
		//handle the form
		//first validate
		$warning='';
		if($_POST['name']==''||$_POST['date']==''||$_POST['time']=='' ||$_POST['desc']=='')
		{
			$warning="<span class='warning'>Please complete all fields.</span>";
		}
		
		//if he's made an error
		if($warning!='')
		{
		//display the form
		$p=new Page('Add Post');
		$p->setHeading('Please complete the form');
		$p->setContent($text.'Please complete the form below<p/><br/>'.$warning.$form_text);
		$p->printIt();
		}
		else
		{
		//inser user int DB
		
		$query="INSERT INTO posts VALUES('".$_POST['name']."',
											'".$_POST['crime']."',
											'".$_POST['date']."',
											'".$_POST['time']."',
											'".$_POST['location']."',
											'".$_POST['desc']."')";
		$result=mysqli_query($con,$query);
		if($result)
		{
		$p=new Page('Add Post');
		$p->setHeading('Your post has been added.');
		$p->setContent('');
		$p->printIt();
		}
		else
		{
		$p=new Page('Add Post');
		$p->setHeading('Crime has already been entered.');
		$_POST['name']='';
		$p->setContent($text.'Please complete the form below<p/><br/>'.$form_text);
		$p->printIt();
		}
		
			
		}		
		
	}
	else
	{
		//display the form
		$p=new Page('Add Post');
		$p->setHeading('Please complete the form, <b>all fields are compulsary</b>.');
		$p->setContent('Please complete the form below<p/><br/>'.$form_text);
		$p->printIt();
	}
	
	

?>

