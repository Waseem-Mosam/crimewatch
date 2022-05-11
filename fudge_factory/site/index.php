<?php
//CONTROLLER FILE
//include config file
require_once 'config.inc.php';

switch($_GET['mod'])
{
	case 'home':
	{
		include 'modules/home.php';
		break;
	}
	case 'products':
	{
		include 'modules/products.php';
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