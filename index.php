<?php
require ('config.php');
include ('includes/smarty.php');

if ($displayErrors == 1) {
	error_reporting(-1);
	ini_set('display_errors', 'On');
}

// Start or restart the session.
session_start();
if(!isset($_SESSION['session'])) {
	$_SESSION['session'] = 0;
}

switch ($_SESSION['session']) {
	case 0 :
		include ('includes/login.php');
		break;
	case 1 :
		include ('includes/userhome.php');
		break;
	case 2 :
		include ('includes/adminhome.php');
		break;
	case 3 :
		session_destroy();
		header("Refresh:0");
		break;
}
?>
