<?php
//PRODUCTS MODULE
//Displays all the available products

	include("connection.php");
	
	//Construct membership form
	$f=new Form('join_form');
	$f->addTextBox('name', 'First Name');
	$f->addTextBox('last_name', 'Last Name');
	$g_array=array('Male','Female');
	$d=new DropBox('gender', 'Gender',$g_array);
	$f->addElement($d);
	$m=new TextBox('email', 'E-mail');
	$m->setIsSticky(FALSE);
	$f->addElement($m);
	$p=new TextBox('password', 'Password');
	$p->setIsPassword(TRUE);
	$f->addElement($p);
	$p=new TextBox('conf_password', 'Confirm Password');
	$p->setIsPassword(TRUE);
	$f->addElement($p);
	$f->setSubmitLabel('Join GiftBox!');
	$f->setAction('index.php?mod=join');
	$form_text=$f->tooString();
	
	
	if(isset($_POST['submitted']))
	{
		//handle the form
		//first validate
		$warning='';
		if($_POST['name']==''||$_POST['last_name']==''||$_POST['email']=='')
		{
			$warning="<span class='warning'>Please complete all fields.</span>";
		}
		if($_POST['password']!=$_POST['conf_password'] || $_POST['password']=='')
		{	
			$warning.="<br/><span class='warning'>Please provide a correct password.</span>";
		}
		if(strlen($_POST['password'])<7)
		{	
			$warning.="<br/><span class='warning'>Your password must be longer than 8 chars.</span>";
		}
		//if he's made an error
		if($warning!='')
		{
		//display the form
		$p=new Page('Join us');
		$p->setHeading('Please complete the form');
		$p->setContent($text.'Please complete the form below<p/><br/>'.$warning.$form_text);
		$p->printIt();
		}
		else
		{
		//inser user int DB
		
		$query="INSERT INTO members VALUES('".$_POST['name']."',
											'".$_POST['last_name']."',
											'".$_POST['gender']."',
											'".$_POST['email']."',
											'".md5($_POST['password'])."')";
		$result=mysqli_query($con,$query);
		if($result)
		{
		$p=new Page('Join us');
		$p->setHeading('Welcome');
		$p->setContent('');
		$p->printIt();
		}
		else
		{
		$p=new Page('Join us');
		$p->setHeading('User already exists');
		$_POST['email']='';
		$p->setContent($text.'Please complete the form below<p/><br/>'.$form_text);
		$p->printIt();
		}
		
			
		}		
		
	}
	else
	{
		//display the form
		$p=new Page('Join us');
		$p->setHeading('Please complete the form, <b>all fields are compulsary</b>.');
		$p->setContent($text.'Please complete the form below<p/>'.$form_text);
		$p->printIt();
	}
	
	

?>

