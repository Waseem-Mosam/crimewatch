<?php
    //include("modules/connection.php");
	//include("modules/functions.php");

	//$user_data = check_login($con);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- SET PAGE TITLE -->
<title><?php echo $this->title; ?></title>
<!-- METADATA -->
<meta name="Description" content="<?php echo $this->metacontent; ?>" />
<meta name="Keywords" content="<?php echo $this->metakeywords; ?>" />
<!-- STYLESHEETS -->
<link href="stylesheets/default.css" rel="stylesheet" type="text/css" />
</head>
<!-- BEGIN BODY -->
<body>
<center>
	<!--HEAD SECTION -->	
    <div id="head">
    <a href="index.php?mod=home">Home</a>
    <a href="index.php?mod=products">Products</a>
    <a href="index.php?mod=join">Join</a>
    <a href="index.php?mod=login">Login</a>
    </div>
    <!-- MAIN SECTION -->
    <div id='main'>
    <h1><?php echo $this->heading; ?></h1>
	<div id='content'><?php echo $this->content; ?></div>
    </div>
    <!-- FOOT SECTION -->
    <div id="foot">
    </div>
</center>
</body>
<!-- END BODY -->
</html>
