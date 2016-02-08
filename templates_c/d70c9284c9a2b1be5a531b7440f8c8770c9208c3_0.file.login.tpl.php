<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-08 15:13:59
  from "/home/admin/web/ts3room.xervers.net/public_html/templates/default/login.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56b8b0b733e889_69003493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd70c9284c9a2b1be5a531b7440f8c8770c9208c3' => 
    array (
      0 => '/home/admin/web/ts3room.xervers.net/public_html/templates/default/login.tpl',
      1 => 1454944435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b8b0b733e889_69003493 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>TS3Room login</title>
        
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateFolder']->value;?>
/assets/css/styles.css" />
        
		<!--[if lt IE 9]>
			<?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
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
        <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateFolder']->value;?>
/assets/js/script.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
