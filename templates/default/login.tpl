{* Smarty *}
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>TS3Room login</title>
        
		<link rel="stylesheet" href="{$templateFolder}/assets/css/styles.css" />
        
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="formContainer">
			<form id="login" method="post">
				<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>
				<input type="text" name="loginUser" id="loginUser" value="Username" />
				<input type="password" name="loginPass" id="loginPass" value="Password" />
				<input type="submit" name="submit" value="Login" />
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
				<input type="text" name="recoverEmail" id="recoverEmail" value="Email" />
				<input type="submit" name="submit" value="Recover" />
			</form>
		</div>
		<footer>
			<div align="center">Powered by <a href="http://www.xervers.net/">xervers.net</a></div>
		</footer>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="{$templateFolder}/assets/js/script.js"></script>
	</body>
</html>
