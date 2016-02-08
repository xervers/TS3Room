<?php

define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/includes/smarty/');
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('templates/' . $template . '/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');

?>