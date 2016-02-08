<?php
session_start();

if (isset($_POST)) {
	$smarty->assign('templateFolder','templates/' . $template);
	$smarty->display('templates/' . $template . '/login.tpl');
} else {
    $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_data, $mysql_port);

	if (mysqli_connect_errno())	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		$username = strtolower($_POST["loginUser"]);
		$password = sha1(strtolower($_POST["loginUser"]) . ":" . strtolower($_POST["loginPass"]));
		
		$stmt = $mysqli->prepare("SELECT id,level,enabled FROM users WHERE username=? AND password=?");
		$stmt->bind_param('ss', $username, $password);
		$stmt->execute();

		$stmt->store_result();
		if ($stmt->num_rows > 0) {
			$stmt->bind_result($userID, $userLevel, $userEnabled);
			if ($userEnabled == 1) {
				if ($userLevel == 0) {
					$_SESSION['session'] = 1;
					header("Refresh:0");
				} else {
					$_SESSION['session'] = 2;
					header("Refresh:0");
				}
			} else {
				echo "User is disabled. Please contact support.";
			}
		} else {
			echo "Username or password invalid.";
		}
		$stmt->close();
		$mysqli->close();
	}
}
?>
