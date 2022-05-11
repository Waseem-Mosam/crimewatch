<?php


include("connection.php");
include("functions.php");

$lf=new Form('login_form');
$lf->addTextBox('email','E-Mail');
$p=new TextBox('password','Password');
$p->setIsPassword(TRUE);
$lf->addElement($p);
$lf->setAction('index.php?mod=login');
$lf->setSubmitLabel('Login');

//check if the form wass submitted
if(isset($_POST['submitted']))
{
//validate form
		
		$query="SELECT first_name FROM members WHERE (email='".$_POST['email']."') AND (password='".md5($_POST['password'])."')";
		 
		$result=mysqli_query($con, $query);
		if(mysqli_num_rows($result)==1)
		{
			$p=new Page('Log In');
			$p->setHeading('Welcome back');
			$p->setContent('');
			$p->printIt();
		}
		else
		{
			$p=new Page('Log In');
			$p->setHeading('Invalid Credentials');
			$p->setContent($lf->tooString());
			$p->printIt();
		}
		

}
else
{
		$p=new Page('Log In');
		$p->setHeading('Please provide credentials');
		$p->setContent($lf->tooString());
		$p->printIt();
}

?>