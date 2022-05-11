<?php
//CONTROLLER FILE
//include config file
require_once 'config.inc.php';
//include("modules/connection.php");
//require_once("modules/functions.php");

switch($_GET['mod'])
{
	case 'home':
	{
		include 'modules/home.php';
		break;
	}
	case 'add_posts':
	{
		include 'modules/add_posts.php';
		break;
	}
	case 'join':
	{
		include 'modules/join.php';
		break;
	}
	case 'login':
	{
		include 'modules/login.php';
		break;
	}
	default:
	{
		include 'modules/home.php';
		break;
	}
	

}





?>