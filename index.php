<?php
// Start or restart the session.
session_start();
if(!isset($_SESSION['userlevel'])) {
	$_SESSION['userlevel'] = 0;
}

switch ($_SESSION) {
	case 0 :
		include ('login.php');
		break;
	case 1 :
		include ('userhome.php');
		break;
	case 2 :
		include ('adminhome.php');
		break;
	case 3 :
		session_destroy();
		header("Refresh:0");
		break;
}
?>
